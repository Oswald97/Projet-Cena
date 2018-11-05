<?php

use Illuminate\Database\Seeder;

class ArrondissementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Cotonou
    	//1
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"1er Arrondissement",
           'commune_id'=>1,
        ]);
        //2
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"2eme Arrondissement",
           'commune_id'=>1,
        ]);
        //3
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"3eme Arrondissement",
           'commune_id'=>1,
        ]);

        //Abomey-Calavi
        //4
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"Akassato",
           'commune_id'=>2,
        ]);
        //5
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"Godomey",
           'commune_id'=>2,
        ]);
        //Allada
        //6
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"Attogon",
           'commune_id'=>3,
        ]);
        //7
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"Avakpa",
           'commune_id'=>3,
        ]);
        //Adjarra
        //8
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"Honvie",
           'commune_id'=>4,
        ]);
        //9
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"Malanhoui",
           'commune_id'=>4,
        ]);
        //Adjohoun
        //10
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"Awonou",
           'commune_id'=>5,
        ]);
        //11
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"Azowlisse",
           'commune_id'=>5,
        ]);
        //Porto-Novo
        //12
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"1er Arrondissement",
           'commune_id'=>6,
        ]);
        //13
        DB::table('arrondissements')->insert([
           'nom_arrondissement'=>"2eme Arrondissement",
           'commune_id'=>6,
        ]);
    }
}
