<?php

use Illuminate\Database\Seeder;

class CentreVotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//1er arrondissement cotonou
    	//1
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Suru-Lere",
        	'arrondissement_id'=>1,
        ]);
        //2
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Tanto",
        	'arrondissement_id'=>1,
        ]);
        //2eme arrondissement cotonou
        //3
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Senande",
        	'arrondissement_id'=>2,
        ]);
        //4
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Kpondehou",
        	'arrondissement_id'=>2,
        ]);
        //3eme arron cotonou
        //5
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Agbato",
        	'arrondissement_id'=>3,
        ]);
        //6
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Hlacomey",
        	'arrondissement_id'=>3,
        ]);
        //akassato
        //7
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Adjagbo",
        	'arrondissement_id'=>4,
        ]);
        //8
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Gbetagbo",
        	'arrondissement_id'=>4,
        ]);
        //godomey
        //9
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Dekoungbe",
        	'arrondissement_id'=>5,
        ]);
        //10
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Houalacomey",
        	'arrondissement_id'=>5,
        ]);
        //11
        //attogon

        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Niaouli I",
        	'arrondissement_id'=>6,
        ]);
        //12
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Niaouli II",
        	'arrondissement_id'=>6,
        ]);
        //avakpa
        //13
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Adjohoun",
        	'arrondissement_id'=>7,
        ]);
        //14
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Glotomey",
        	'arrondissement_id'=>7,
        ]);
        //honvie
        //15
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Adjati",
        	'arrondissement_id'=>8,
        ]);
        //16
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Hounsa",
        	'arrondissement_id'=>8,
        ]);
        //malanhoui
        //17
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Agata",
        	'arrondissement_id'=>9,
        ]);
        //18
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Oueke",
        	'arrondissement_id'=>9,
        ]);
        //awonou
        //19
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Abidomey",
        	'arrondissement_id'=>10,
        ]);
        //20
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Assigui",
        	'arrondissement_id'=>10,
        ]);
        //azowlisse
        //21
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Abeokouta",
        	'arrondissement_id'=>11,
        ]);
        //22
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Houeda",
        	'arrondissement_id'=>11,
        ]);
        //1er arron porto
        //23
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Adjegounle",
        	'arrondissement_id'=>12,
        ]);
        //24
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Gbekon",
        	'arrondissement_id'=>12,
        ]);
        //2em arron porto
        //25
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Agbokou",
        	'arrondissement_id'=>13,
        ]);
        //26
        DB::table('centre_votes')->insert([
        	'nom_centre'=>"Djegan Daho",
        	'arrondissement_id'=>13,
        ]);
    }
}
