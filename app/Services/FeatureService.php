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

    public function save($data)
    {
        //
    }
}
