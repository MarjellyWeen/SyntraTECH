<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => 'T2 campus',
            'cap' => 2000,
            'description' => 'nagelnieuwe glazen campus',
        ]);
        DB::table('locations')->insert([
            'name' => 'Campus Oost',
            'cap' => 2000,
            'description' => 'Oost-West Thuis Best',
        ]);

    }
}
