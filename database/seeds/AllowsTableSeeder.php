<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AllowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allows')->insert([
           'date'=>Carbon::now(),
        ]);
    }
}
