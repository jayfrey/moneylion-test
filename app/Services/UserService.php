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

    public function save($data)
    {
        //
    }
}
