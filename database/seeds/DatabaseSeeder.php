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
        $this->call(ntsa_recordsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(vehicle_descriptionTableSeeder::class);
        $this->call(insurance_recordsTableSeeder::class);
        $this->call(service_recordsTableSeeder::class);
    }
}
