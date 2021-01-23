<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserService;

class UserController extends Controller
{
	private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Get all users.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response  = $this->userService->getAll();
        $data = \Arr::except($response, 'status');

        if($response['status']){
            $return = response($data,200);
        } else {            
            $return = response($data,400);
        }

        return $return;
    }
}
