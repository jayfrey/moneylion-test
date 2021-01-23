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
        $response = $this->userFeatureRepo->getAccess($data);

        if(!is_null($response)){
            $return = [
                'status' => 1,
                'canAccess' => $response->access ? true : false,
            ];
        } else {
            $return = [
                'status' => 0,
                "message" => __('user-feature.notexist'),
            ];
        }

        return $return;
    }
}
