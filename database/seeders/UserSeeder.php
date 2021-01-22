<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Feature;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(5)->create();
        $features = Feature::all();

        foreach($users as $user) {
        	foreach($features as $feature) {
	        	DB::table('user_feature')->insert([
	        		'user_id' => $user->id,
	        		'feature_id' => $feature->id,
	        		'access' => rand(0,1),
	        		'created_at' => Carbon::now(),
	        	]);
        	}
        }
    }
}
