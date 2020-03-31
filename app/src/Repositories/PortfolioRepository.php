<?php

namespace App\src\Repositories;

use App\src\Models\Portfolio;
use Illuminate\Support\Collection;

class PortfolioRepository
{
    protected $portfolio;

    public function __construct(Portfolio $portfolio)
    {
        $this->portfolio = $portfolio;
    }

    public function getById($id): Portfolio
    {
        return $this->portfolio->find($id);
    }

    public function getAll(): Collection
    {
        return $this->portfolio->get();
    }

    public function update(int $id, $data): Portfolio
    {
        $portfolio = $this->getById($id);
        $portfolio->alias = $data->alias;
        $portfolio->sort = $data->sort;
        $portfolio->title = $data->title;
        $portfolio->src = $data->src;
        $portfolio->href = $data->href;
        $portfolio->description = $data->description;
        $portfolio->clock = $data->clock;
        $portfolio->calendar = $data->calendar;
        $portfolio->briefcase = $data->briefcase;
        $portfolio->style = $data->style;
        $portfolio->isTwoCols = $data->isTwoCols;
        $portfolio->isReverse = $data->isReverse;
        $portfolio->save();
        return $portfolio;
    }

    public function create($data): Portfolio
    {
        return $this->portfolio->create($data);
    }

    public function delete(int $id)
    {
        $portfolio = $this->portfolio::find($id);
        $portfolio->delete();
        return ['id' => $id];
    }

}
