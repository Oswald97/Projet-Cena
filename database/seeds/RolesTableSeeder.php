<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
           'nom'=>"Chef Centre",
        ]);
        DB::table('roles')->insert([
           'nom'=>"Chef Bureau",
        ]);
        DB::table('roles')->insert([
           'nom'=>"Chef Arrondissement",
        ]);
        DB::table('roles')->insert([
           'nom'=>"Membre Cena",
        ]);
    }
}
