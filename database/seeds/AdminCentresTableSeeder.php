<?php

use Illuminate\Database\Seeder;

class AdminCentresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=14; $i < 40; $i++) { 
        	DB::table('admin_centres')->insert([
		      	'user_id'=>$i,
		        'centre_vote_id'=>$i-13,
        	]);
        }
    }
}
