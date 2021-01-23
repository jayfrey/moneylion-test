<?php

namespace App\Services;

use App\Repositories\FeatureRepository;

class FeatureService
{
    private $featureRepo; 

    public function __construct(FeatureRepository $featureRepo)
    {
        $this->featureRepo = $featureRepo;
    }

    public function getAll()
    {
    	$response = $this->featureRepo->getAll();

    	if($response->count() > 0){
            $return = [
                'status' => 1,
                'data' => $response->toArray(),
            ];
        } else {
            $return = [
                'status' => 0,
                "message" => __('feature.empty'),
            ];
        }
        return $return;
    }
}
