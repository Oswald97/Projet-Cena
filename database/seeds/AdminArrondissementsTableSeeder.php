<?php

use Illuminate\Database\Seeder;

class AdminArrondissementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 14; $i++) { 
        	DB::table('admin_arrondissements')->insert([
	           'user_id'=>$i,
	           'arrondissement_id'=>$i,
        	]);
        }
    }
}
