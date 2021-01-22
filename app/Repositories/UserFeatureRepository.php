<?php

namespace App\Repositories;

use App\Models\UserFeature;
use Illuminate\Database\Eloquent\Builder;

class UserFeatureRepository
{
    private $model; 

    public function __construct(UserFeature $model)
    {
        $this->model = $model;
    }

    public function update($data)
    {
        return $this->model::whereHas('user', function (Builder $query) use ($data) {
        	$query->where('email', $data['email']);
        })->whereHas('feature', function (Builder $query) use ($data) {
        	$query->where('name', $data['featureName']);
        })->update(['access' => $data['enable']]);
    }

    public function getAccess($data)
    {
        return $this->model::whereHas('user', function (Builder $query) use ($data) {
        	$query->where('email', $data['email']);
        })->whereHas('feature', function (Builder $query) use ($data) {
        	$query->where('name', $data['featureName']);
        })->first();
    }
}
