<?php

use Illuminate\Database\Seeder;

class service_recordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('service_records')->insert([
            'licence_plate' => 'KCB 310A',
            'date' => '2018-03-31',
            'current_mileage' => 58000,
            'next_service_mileage' => 63000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KBT 303T',
            'date' => '2018-03-31',
            'current_mileage' => 77000,
            'next_service_mileage' => 82000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
       	DB::table('service_records')->insert([
            'licence_plate' => 'KCH 681U',
            'date' => '2018-03-31',
            'current_mileage' => 35000,
            'next_service_mileage' => 40000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
       	DB::table('service_records')->insert([
            'licence_plate' => 'KCU 800G',
            'date' => '2018-03-31',
            'current_mileage' => 76500,
            'next_service_mileage' => 81500,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
       DB::table('service_records')->insert([
            'licence_plate' => 'KCB 548N',
            'date' => '2018-03-31',
            'current_mileage' => 40000,
            'next_service_mileage' => 45000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
       	DB::table('service_records')->insert([
            'licence_plate' => 'KCU 752V',
            'date' => '2018-03-31',
            'current_mileage' => 98000,
            'next_service_mileage' => 103000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
       	DB::table('service_records')->insert([
            'licence_plate' => 'KBZ 350U',
            'date' => '2018-03-31',
            'current_mileage' => 67000,
            'next_service_mileage' => 72000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KBT 619X',
            'date' => '2018-03-31',
            'current_mileage' => 34000,
            'next_service_mileage' => 39000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KCU 311X',
            'date' => '2018-03-31',
            'current_mileage' => 103000,
            'next_service_mileage' => 108000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KCU 477W',
            'date' => '2018-03-31',
            'current_mileage' => 140000,
            'next_service_mileage' => 145000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KBV 608F',
            'date' => '2018-03-31',
            'current_mileage' => 400000,
            'next_service_mileage' => 405000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KCU 635M',
            'date' => '2018-03-31',
            'current_mileage' => 56000,
            'next_service_mileage' => 61000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KCR 779W',
            'date' => '2018-03-31',
            'current_mileage' => 78000,
            'next_service_mileage' => 83000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KCA 774Y',
            'date' => '2018-03-31',
            'current_mileage' => 100000,
            'next_service_mileage' => 105000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('service_records')->insert([
            'licence_plate' => 'KCH 874X',
            'date' => '2018-03-31',
            'current_mileage' => 340000,
            'next_service_mileage' => 345000,
            'cost' => 5000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
