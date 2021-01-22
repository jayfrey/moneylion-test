<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Feature;
use Carbon\Carbon;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = explode(',', env('FEATURES'));
        foreach($features as $feature) {
    		DB::table('features')->insert([
        		'name' => $feature,
        		'created_at' => Carbon::now(),
        	]);
        }
    }
}
