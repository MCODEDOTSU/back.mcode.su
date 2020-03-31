<?php

namespace App\Http\Controllers;

use App\src\Services\MessageService;
use Illuminate\Http\Request;

class MessageController
{
    protected $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function index()
    {
        try {
            return response($this->messageService->getAll(), 200);
        } catch (\Exception $ex) {
            return response(['error' => $ex->getMessage()], 500);
        }
    }

    public function show(int $id)
    {
        try {
            return response($this->messageService->getById($id), 200);
        } catch (\Exception $ex) {
            return response(['error' => $ex->getMessage()], 500);
        }
    }

    public function store(Request $data)
    {
        try {
            return response($this->messageService->create($data), 200);
        } catch (\Exception $ex) {
            return response(['error' => $ex->getMessage()], 500);
        }
    }

    public function update(int $id, Request $data)
    {
        try {
            return response($this->messageService->update($id, $data), 200);
        } catch (\Exception $ex) {
            return response(['error' => $ex->getMessage()], 500);
        }
    }

    public function destroy(int $id)
    {
        try {
            return response($this->messageService->delete($id), 200);
        } catch (\Exception $ex) {
            return response(['error' => $ex->getMessage()], 500);
        }
    }

}
