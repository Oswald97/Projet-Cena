<?php

use Illuminate\Database\Seeder;

class AdminCenasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('admin_cenas')->insert([
		       'user_id'=>63,
        	]);
    }
}
