<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DepartementsTableSeeder::class);
        $this->call(CommunesTableSeeder::class);
        $this->call(ArrondissementsTableSeeder::class);
        $this->call(CentreVotesTableSeeder::class);
        $this->call(BureauVotesTableSeeder::class);
        $this->call(AdminArrondissementsTableSeeder::class);
        $this->call(AdminCentresTableSeeder::class);
        $this->call(AdminBureausTableSeeder::class);
        $this->call(AdminCenasTableSeeder::class);
        $this->call(PartiesTableSeeder::class);
        $this->call(AllowsTableSeeder::class);
    }
}
