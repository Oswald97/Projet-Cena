<?php

use Illuminate\Database\Seeder;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departements')->insert([
           'nom_departement'=>"Littoral",
        ]);
        DB::table('departements')->insert([
           'nom_departement'=>"Attlantique",
        ]);
        DB::table('departements')->insert([
           'nom_departement'=>"Oueme",
        ]);
        DB::table('departements')->insert([
           'nom_departement'=>"Mono",
        ]);
        DB::table('departements')->insert([
           'nom_departement'=>"Couffo",
        ]);
        DB::table('departements')->insert([
           'nom_departement'=>"Zou",
        ]);
    }
}
