<?php

use Illuminate\Database\Seeder;

class PartiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parties')->insert([
           'nom_partie'=>"RB",
        ]);

        DB::table('parties')->insert([
           'nom_partie'=>"PRD",
        ]);

        DB::table('parties')->insert([
           'nom_partie'=>"UN",
        ]);

        DB::table('parties')->insert([
           'nom_partie'=>"FCBE",
        ]);

        DB::table('parties')->insert([
           'nom_partie'=>"ARD",
        ]);

        DB::table('parties')->insert([
           'nom_partie'=>"ABT",
        ]);
    }
}
