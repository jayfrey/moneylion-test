<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\FeatureUpdateRequest;
use App\Http\Controllers\Controller;
use App\Services\UserFeatureService;

class FeatureController extends Controller
{
    private $featureService; 

    public function __construct(UserFeatureService $userFeatureService)
    {
        $this->userFeatureService = $userFeatureService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request = $request->query();
        $response  = $this->userFeatureService->getAccess($request);
        $data = \Arr::except($response, 'status');

        if($response['status']){
            $return = response($data,200);
        } else {            
            $return = response($data,400);
        }

        return $return ;
    }

    /**s
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeatureUpdateRequest $request)
    {
        $request = $request->all();
        $this->userFeatureService->update($request);
        return response('',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
