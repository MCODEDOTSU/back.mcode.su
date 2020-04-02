<?php

namespace App\src\Services;

use App\src\Repositories\MessageRepository;
use Illuminate\Http\Request;
use App\src\Models\Message;
use Illuminate\Support\Collection;
use App\src\Services\MailServices\ContactsMailService;

class MessageService
{
    protected $messageRepository;
    protected $mailService;

    public function __construct(MessageRepository $messageRepository, ContactsMailService $mailService)
    {
        $this->messageRepository = $messageRepository;
        $this->mailService = $mailService;
    }

    public function getById($id): Message
    {
        return $this->messageRepository->getById($id);
    }
    
    public function getAll(): Collection
    {
        return $this->messageRepository->getAll();
    }

    public function update(int $id, Request $data): Message
    {
        return $this->messageRepository->update($id, $data);
    }

    public function create(Request $data): Message
    {
        $message = $this->messageRepository->create($data);
        $this->mailService->send($message);
        return $message;
    }

    public function delete(int $id)
    {
        return $this->messageRepository->delete($id);
    }

}
