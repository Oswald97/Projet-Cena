<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$chefCentre=Role::whereNom('chef Centre')->first()->id;
        $chefBureau=Role::whereNom('chef Bureau')->first()->id;
        $chefArron=Role::whereNom('chef Arrondissement')->first()->id;
        $membre=Role::whereNom('membre Cena')->first()->id;*/
        /*DB::table('users')->insert([
           'nom'=>"TOKOU",
           'prenom'=>'Eude',
           'email'=>'eude@tokou.com',
           'telephone'=>'+229 96000102',
           'password'=>bcrypt('sagesse'),
        ]);
        */
        $chefCentre=1;
        $chefBureau=2;
        $chefArron=3;
        $membre=4;

        $arron= new User();
        $arron-> nom = 'BOKO';
        $arron-> prenom = 'Donné';
        $arron-> email = 'donne@gmail.com';
        $arron-> telephone= '+229 96000102';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Tokou';
        $arron-> prenom = 'Eude';
        $arron-> email = 'eude@gmail.com';
        $arron-> telephone= '+229 96000103';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Abiola';
        $arron-> prenom = 'Deen';
        $arron-> email = 'deen@gmail.com';
        $arron-> telephone= '+229 96000106';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Afouda';
        $arron-> prenom = 'Serge';
        $arron-> email = 'serge@gmail.com';
        $arron-> telephone= '+229 96000107';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Akakpo';
        $arron-> prenom = 'Ascha';
        $arron-> email = 'ascha@gmail.com';
        $arron-> telephone= '+229 96000108';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Ainadou';
        $arron-> prenom = 'Florian';
        $arron-> email = 'flo@gmail.com';
        $arron-> telephone= '+229 96000109';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Akpona';
        $arron-> prenom = 'Wilo';
        $arron-> email = 'wilo@gmail.com';
        $arron-> telephone= '+229 96000110';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Affo';
        $arron-> prenom = 'Ruthus';
        $arron-> email = 'ruth@gmail.com';
        $arron-> telephone= '+229 96000112';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Bakary';
        $arron-> prenom = 'Farid';
        $arron-> email = 'farid@gmail.com';
        $arron-> telephone= '+229 96000111';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Boni';
        $arron-> prenom = 'Nawa';
        $arron-> email = 'nawa@gmail.com';
        $arron-> telephone= '+229 96000113';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Codo';
        $arron-> prenom = 'Maya';
        $arron-> email = 'maya@gmail.com';
        $arron-> telephone= '+229 96000114';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Moussa';
        $arron-> prenom = 'codjo';
        $arron-> email = 'codjo@gmail.com';
        $arron-> telephone= '+229 96000115';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $arron= new User();
        $arron-> nom = 'Dossou';
        $arron-> prenom = 'Toni';
        $arron-> email = 'toni@gmail.com';
        $arron-> telephone= '+229 96000116';
        $arron-> password = bcrypt('admin');
        $arron-> save();
        $arron-> roles() -> attach($chefArron);

        $centre= new User();
        $centre-> nom = 'Sossou';
        $centre-> prenom = 'Richard';
        $centre-> email = 'richard@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);
        
        $centre= new User();
        $centre-> nom = 'Tognigban';
        $centre-> prenom = 'Romaric';
        $centre-> email = 'romaric@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Adanhounme';
        $centre-> prenom = 'Boris';
        $centre-> email = 'boris@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Zime';
        $centre-> prenom = 'Saka';
        $centre-> email = 'saka@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'zegue';
        $centre-> prenom = 'prosper';
        $centre-> email = 'prosper@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Dossou';
        $centre-> prenom = 'Tata';
        $centre-> email = 'tata@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Sagbo';
        $centre-> prenom = 'Bere';
        $centre-> email = 'bere@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Sagbo';
        $centre-> prenom = 'Momo';
        $centre-> email = 'momo@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Yekpon';
        $centre-> prenom = 'Hakim';
        $centre-> email = 'hakim@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Dossa';
        $centre-> prenom = 'Mathi';
        $centre-> email = 'mathi@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Boni';
        $centre-> prenom = 'Fred';
        $centre-> email = 'fred@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Boko';
        $centre-> prenom = 'bili';
        $centre-> email = 'bili@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Sanni';
        $centre-> prenom = 'Amina';
        $centre-> email = 'amina@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Chitou';
        $centre-> prenom = 'Salim';
        $centre-> email = 'salim@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Chitou';
        $centre-> prenom = 'Saliou';
        $centre-> email = 'saliou@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Asogba';
        $centre-> prenom = 'David';
        $centre-> email = 'david@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Agbo';
        $centre-> prenom = 'Isaac';
        $centre-> email = 'isaac@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() ->attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Messi';
        $centre-> prenom = 'Leo';
        $centre-> email = 'leo@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Ronaldo';
        $centre-> prenom = 'Christ';
        $centre-> email = 'christ@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Gohou';
        $centre-> prenom = 'Michel';
        $centre-> email = 'michel@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Adjou';
        $centre-> prenom = 'Robert';
        $centre-> email = 'robert@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Yanvi';
        $centre-> prenom = 'Damien';
        $centre-> email = 'damien@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Fofo';
        $centre-> prenom = 'Dani';
        $centre-> email = 'dani@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Dada';
        $centre-> prenom = 'Sara';
        $centre-> email = 'sara@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Migan';
        $centre-> prenom = 'John';
        $centre-> email = 'john@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Aho';
        $centre-> prenom = 'Esdras';
        $centre-> email = 'Esdras@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefCentre);

        $centre= new User();
        $centre-> nom = 'Houssou';
        $centre-> prenom = 'Mina';
        $centre-> email = 'mina@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Agossou';
        $centre-> prenom = 'Meillo';
        $centre-> email = 'meillo@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Stark';
        $centre-> prenom = 'Tony';
        $centre-> email = 'tony@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Yovo';
        $centre-> prenom = 'Clara';
        $centre-> email = 'clara@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Boni';
        $centre-> prenom = 'Thomas';
        $centre-> email = 'thomas@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Zossou';
        $centre-> prenom = 'Tom';
        $centre-> email = 'tom@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Azonvi';
        $centre-> prenom = 'Nina';
        $centre-> email = 'nina@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Sedo';
        $centre-> prenom = 'Gibran';
        $centre-> email = 'gibran@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Sossa';
        $centre-> prenom = 'Fulbert';
        $centre-> email = 'fulbert@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Sossa';
        $centre-> prenom = 'Gaston';
        $centre-> email = 'gaston@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Govoun';
        $centre-> prenom = 'Yaya';
        $centre-> email = 'yaya@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Senan';
        $centre-> prenom = 'Ben';
        $centre-> email = 'ben@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Senan';
        $centre-> prenom = 'Miso';
        $centre-> email = 'miso@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Tcheke';
        $centre-> prenom = 'Eli';
        $centre-> email = 'eli@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Sedo';
        $centre-> prenom = 'Ines';
        $centre-> email = 'ines@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Zinsou';
        $centre-> prenom = 'Natacha';
        $centre-> email = 'natacha@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Coco';
        $centre-> prenom = 'Firmina';
        $centre-> email = 'firmina@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Gbokou';
        $centre-> prenom = 'Fido';
        $centre-> email = 'fido@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Zannou';
        $centre-> prenom = 'Sedo';
        $centre-> email = 'sedo@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Adelou';
        $centre-> prenom = 'Sem';
        $centre-> email = 'sem@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Adeloubi';
        $centre-> prenom = 'Roger';
        $centre-> email = 'roger@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Bobo';
        $centre-> prenom = 'Felix';
        $centre-> email = 'felix@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $centre= new User();
        $centre-> nom = 'Papi';
        $centre-> prenom = 'Sam';
        $centre-> email = 'sam@gmail.com';
        $centre-> telephone= '+229 96000104';
        $centre-> password = bcrypt('admin');
        $centre-> save();
        $centre-> roles() -> attach($chefBureau);

        $membre= new User();
        $membre-> nom = 'Ogoudikpe';
        $membre-> prenom = 'Gloria';
        $membre-> email = 'gloria@gmail.com';
        $membre-> telephone= '+229 96000102';
        $membre-> password = bcrypt('admin');
        $membre-> save();
        $membre-> roles() -> attach(4);
    }
}
