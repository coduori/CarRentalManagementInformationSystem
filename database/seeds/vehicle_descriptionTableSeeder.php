<?php

use Illuminate\Database\Seeder;

class vehicle_descriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('vehicle_description')->insert([
                'chasis_number' => '4R5TT3ED6',
                'licence_plate' => 'KCB 548N',
                'model' => 'Toyota Runx',
                'transmission' => 'Automatic',
                'image' => 'KCB 548N.png',
                'lease_price' => 2000,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
               DB::table('vehicle_description')->insert([
                'chasis_number' => '4RFG6HN8Z',
                'licence_plate' => 'KCU 635M',
                'model' => 'Toyota Vitz',
                'transmission' => 'Automatic',
                'image' => 'KCU 635M.png',
                'lease_price' => 2000,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]); 
               DB::table('vehicle_description')->insert([
                'chasis_number' => '7RHF8C9BJ',
                'licence_plate' => 'KBV 608F',
                'model' => 'Toyota Ist',
                'transmission' => 'Manual',
                'image' => 'KBV 608F.png',
                'lease_price' => 2000,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'D345G6HN7',
                'licence_plate' => 'KCH 874X',
                'model' => 'Toyota Auris',
                'transmission' => 'Automatic',
                'image' => 'KCH 874X.png',
                'lease_price' => 2000,
                'special_features' => 'Music System, Car tracking',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'D34G6H7JU',
                'licence_plate' => 'KBZ 350U',
                'model' => 'Toyota Fielder',
                'transmission' => 'Manual',
                'image' => 'KBZ 350U.png',
                'lease_price' => 3000,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'D7V91N7VU',
                'licence_plate' => 'KCR 779W',
                'model' => 'Toyota Premio',
                'transmission' => 'Automatic',
                'image' => 'KCR 779W.png',
                'lease_price' => 3000,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'D9FH5FL5N',
                'licence_plate' => 'KCU 477W',
                'model' => 'Mazda Demio',
                'transmission' => 'Automatic',
                'image' => 'KCU 477W.png',
                'lease_price' => 2000,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'DF5H6UJK8',
                'licence_plate' => 'KCU 311X',
                'model' => 'Toyota Fielder',
                'transmission' => 'Automatic',
                'image' => 'KCU 311X.png',
                'lease_price' => 2500,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'DS4T5H7JV',
                'licence_plate' => 'KCU 752V',
                'model' => 'Toyota Auris',
                'transmission' => 'Manual',
                'image' => 'KCU 752V.png',
                'lease_price' => 2000,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]); 
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'E4R5T6Y7R',
                'licence_plate' => 'KCB 310A',
                'model' => 'Toyota Voxy',
                'transmission' => 'Manual',
                'image' => 'KCB 310A.png',
                'lease_price' => 2500,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'H7UK94C6F',
                'licence_plate' => 'KCA 774Y',
                'model' => 'Subaru Outback',
                'transmission' => 'Manual',
                'image' => 'KCA 774Y.png',
                'lease_price' => 4000,
                'special_features' => 'Music System. Cut out: fullhead lights',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	   DB::table('vehicle_description')->insert([
                'chasis_number' => 'Q2W3E4R5T',
                'licence_plate' => 'KBT 303T',
                'model' => 'Toyota Lexus',
                'transmission' => 'Manual',
                'image' => 'KBT 303T.png',
                'lease_price' => 3500,
                'special_features' => 'Cut out next to mirror buttons',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	  DB::table('vehicle_description')->insert([
                'chasis_number' => 'R5T6Y7U84',
                'licence_plate' => 'KCH 681U',
                'model' => 'Toyota Noah',
                'transmission' => 'Manual',
                'image' => 'KCH 681U.png',
                'lease_price' => 3500,
                'special_features' => 'Music System',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
           	  DB::table('vehicle_description')->insert([
                'chasis_number' => 'R5TT678UN',
                'licence_plate' => 'KCU 800G',
                'model' => 'Volkswagen Golf',
                'transmission' => 'Automatic',
                'image' => 'KCU 800G.png',
                'lease_price' => 2500,
                'special_features' => 'Music System, cut out on radio power button',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
     		   DB::table('vehicle_description')->insert([
                'chasis_number' => 'S8FH4K5TG',
                'licence_plate' => 'KBT 619X',
                'model' => 'Toyota Runx',
                'transmission' => 'Manual',
                'image' => 'KBT 619X.png',
                'lease_price' => 3000,
                'special_features' => 'Music system',
                'added_by' => 100001,
                'status' => 'Available',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
    }
}
