<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private $userRepo; 

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
    	$response = $this->userRepo->getAll();

    	if($response->count() > 0){
            $return = [
                'status' => 1,
                'data' => $response->toArray(),
            ];
        } else {
            $return = [
                'status' => 0,
                "message" => __('user.empty'),
            ];
        }
        return $return;
    }
}
