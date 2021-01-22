<?php

namespace App\Services;

use App\Repositories\UserFeatureRepository;

class UserFeatureService
{
    private $userFeatureRepo; 

    public function __construct(UserFeatureRepository $userFeatureRepo)
    {
        $this->userFeatureRepo = $userFeatureRepo;
    }

    public function update($data)
    {
        $this->userFeatureRepo->update($data);
    }

    public function getAccess($data)
    {
        return $this->userFeatureRepo->getAccess($data);
    }
}
