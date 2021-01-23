<?php

namespace App\Repositories;

use App\Models\Feature;

class FeatureRepository
{
    private $model; 

    public function __construct(Feature $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model::all();
    }
}
