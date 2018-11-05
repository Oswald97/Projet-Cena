<?php

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//1
        DB::table('communes')->insert([
           'nom_commune'=>"Cotonou",
           'departement_id'=>1,
        ]);
        //2
        DB::table('communes')->insert([
           'nom_commune'=>"Abomey-Calavi",
           'departement_id'=>2,
        ]);
        //3
        DB::table('communes')->insert([
           'nom_commune'=>"Allada",
           'departement_id'=>2,
        ]);
        //4
        DB::table('communes')->insert([
           'nom_commune'=>"Adjarra",
           'departement_id'=>3,
        ]);
        //5
        DB::table('communes')->insert([
           'nom_commune'=>"Adjohoun",
           'departement_id'=>3,
        ]);
        //6
        DB::table('communes')->insert([
           'nom_commune'=>"Porto-Novo",
           'departement_id'=>3,
        ]);
    }
}
