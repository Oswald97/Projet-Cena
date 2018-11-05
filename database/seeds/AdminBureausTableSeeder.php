<?php

use Illuminate\Database\Seeder;

class AdminBureausTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=40; $i < 63; $i++) { 
        	DB::table('admin_bureaus')->insert([
		       'user_id'=>$i,
		        'bureau_vote_id'=>$i-39,
        	]);
        }
    }
}
