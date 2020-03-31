<?php

namespace App\src\Repositories;

use App\src\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MessageRepository
{
    protected $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getById($id): Message
    {
        return $this->message->find($id);
    }

    public function getAll(): Collection
    {
        return $this->message->get();
    }

    public function update(int $id, $data): Message
    {
        $message = $this->getById($id);
        $message->email = $data->email;
        $message->phone = $data->phone;
        $message->message = $data->message;
        $message->ip = $data->ip;
        $message->useragent = $data->useragent;
        $message->save();
        return $message;
    }

    public function create($data): Message
    {
        return $this->message->create([
            'email' => $data->email,
            'phone' => $data->phone,
            'message' => $data->message,
            'ip' => $_SERVER["REMOTE_ADDR"],
            'useragent' => $_SERVER['HTTP_USER_AGENT'],
        ]);
    }

    public function delete(int $id)
    {
        $message = $this->message::find($id);
        $message->delete();
        return ['id' => $id];
    }

}
