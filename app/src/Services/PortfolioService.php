<?php

namespace App\src\Services;

use App\src\Repositories\PortfolioRepository;
use Illuminate\Http\Request;
use App\src\Models\Portfolio;
use Illuminate\Support\Collection;
use App\src\Services\MailServices\ContactsMailService;

class PortfolioService
{
    protected $portfolioRepository;

    public function __construct(PortfolioRepository $portfolioRepository)
    {
        $this->portfolioRepository = $portfolioRepository;
    }

    public function getById($id): Portfolio
    {
        return $this->portfolioRepository->getById($id);
    }
    
    public function getAll(): Collection
    {
        return $this->portfolioRepository->getAll();
    }

    public function update(int $id, Request $data): Portfolio
    {
        return $this->portfolioRepository->update($id, $data);
    }

    public function create(Request $data): Portfolio
    {
        return $this->portfolioRepository->create($data);
    }

    public function delete(int $id)
    {
        return $this->portfolioRepository->delete($id);
    }

}
