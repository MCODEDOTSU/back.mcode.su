<?php

namespace App\Http\Controllers;

use App\src\Services\PortfolioService;

class PortfolioController
{
    protected $portfolioService;

    public function __construct(PortfolioService $portfolioService)
    {
        $this->portfolioService = $portfolioService;
    }

    public function index()
    {
        try {
            return response($this->portfolioService->getAll(), 200);
        } catch (\Exception $ex) {
            return response(['error' => $ex->getMessage()], 500);
        }
    }
    

}
