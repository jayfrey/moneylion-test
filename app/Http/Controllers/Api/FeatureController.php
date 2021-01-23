<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\FeatureShowRequest;
use App\Http\Requests\FeatureUpdateRequest;
use App\Http\Controllers\Controller;
use App\Services\FeatureService;
use App\Services\UserFeatureService;

class FeatureController extends Controller
{
    private $featureService; 
    private $userFeatureService; 

    public function __construct(FeatureService $featureService, UserFeatureService $userFeatureService)
    {
        $this->featureService = $featureService;
        $this->userFeatureService = $userFeatureService;
    }

    /**
     * Get all feature.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response  = $this->featureService->getAll();
        $data = \Arr::except($response, 'status');

        if($response['status']){
            $return = response($data,200);
        } else {            
            $return = response($data,400);
        }

        return $return;
    }

    /**
     * Get specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(FeatureShowRequest $request)
    {
        $request = $request->query();
        $response  = $this->userFeatureService->getAccess($request);
        $data = \Arr::except($response, 'status');

        if($response['status']){
            $return = response($data,200);
        } else {            
            $return = response($data,400);
        }

        return $return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\FeatureUpdateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(FeatureUpdateRequest $request)
    {
        $request = $request->all();
        $this->userFeatureService->update($request);
        return response('',200);
    }
}
