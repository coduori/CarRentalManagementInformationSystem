<?php

use Illuminate\Database\Seeder;

class insurance_recordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('insurance_records')->insert([
            'licence_plate' => 'KCB 310A',
            'type' => 'Theft and fire',
            'company' => 'Madison Insurance',
            'cost' => 10000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    	 DB::table('insurance_records')->insert([
            'licence_plate' => 'KBT 303T',
            'type' => 'Theft and fire',
            'company' => 'Madison Insurance',
            'cost' => 12000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    	 DB::table('insurance_records')->insert([
            'licence_plate' => 'KCH 681U',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 13000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    	DB::table('insurance_records')->insert([
            'licence_plate' => 'KCU 800G',
            'type' => 'Comprehensive',
            'company' => 'Allianz Insurance',
            'cost' => 15000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KCB 548N',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 7500,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KCU 752V',
            'type' => 'Third Party',
            'company' => 'Jubilee Insurance',
            'cost' => 4000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KBZ 350U',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 7500,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KBT 619X',
            'type' => 'Comprehensive',
            'company' => 'Next Insurance',
            'cost' => 10000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KCU 311X',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 12000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KCU 477W',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 7500,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KBV 608F',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 10000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KCU 635M',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 7500,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KCR 779W',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 22000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KCA 774Y',
            'type' => 'Comprehensive',
            'company' => 'Madison Insurance',
            'cost' => 12500,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('insurance_records')->insert([
            'licence_plate' => 'KCH 874X',
            'type' => 'Comprehensive',
            'company' => 'Allianz Insurance',
            'cost' => 85000,
            'renewal_date' => '2018-01-01',
            'expiery_date' => '2018-03-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);       
    }
}
