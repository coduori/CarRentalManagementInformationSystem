<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'employee_id' => '100001',
            'first_name' => 'Admin',
            'surname' => 'Admin',
            'email' => 'admin@email.com',
            'phone_number' => '0708312046',
            'role' => 'Admin',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'employee_id' => '100002',
            'first_name' => 'Nixon',
            'surname' => 'Omondi',
            'email' => 'nixon@email.com',
            'phone_number' => '0708312047',
            'role' => 'Admin',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'employee_id' => '100003',
            'first_name' => 'Amina',
            'surname' => 'Mohamed',
            'email' => 'mohamed@email.com',
            'phone_number' => '0708312048',
            'role' => 'Employee',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'employee_id' => '100004',
            'first_name' => 'Margaret',
            'surname' => 'Kenyatta',
            'email' => 'margaret@email.com',
            'phone_number' => '0708312049',
            'role' => 'Employee',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'employee_id' => '100005',
            'first_name' => 'Theresa',
            'surname' => 'May',
            'email' => 'may@email.com',
            'phone_number' => '0708312045',
            'role' => 'Employee',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'employee_id' => '100006',
            'first_name' => 'Qabale',
            'surname' => 'Malla',
            'email' => 'malla@email.com',
            'phone_number' => '0708312235',
            'role' => 'Employee',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'employee_id' => '100007',
            'first_name' => 'Desmond',
            'surname' => 'Sewe',
            'email' => 'sewe@email.com',
            'phone_number' => '0708334205',
            'role' => 'Employee',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'employee_id' => '100008',
            'first_name' => 'Ruth',
            'surname' => 'Gathoni',
            'email' => 'ruth@email.com',
            'phone_number' => '0708312040',
            'role' => 'Employee',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'employee_id' => '100009',
            'first_name' => 'Tina',
            'surname' => 'Onyango',
            'email' => 'tina@email.com',
            'phone_number' => '0708300045',
            'role' => 'Employee',
            'password' => Hash::make('CarGeneral.2019'),
            'is_active'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         DB::table('users')->insert([
            'licence_number' => '2493957',
            'first_name' => 'Farhia',
            'surname' => 'Mohammed',
            'email'=>'farhia@email.com',
            'phone_number'=>'0734567821',
            'national_id'=>'45456733',
            'role' => 'Client',
            'licence_expiery'=>'2020-03-31',
            'password' => Hash::make('Client.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'licence_number' => '2483943',
            'first_name' => 'Steve',
            'surname' => 'Biko',
            'email'=>'biko@email.com',
            'phone_number'=>'0734228976',
            'national_id'=>'45934444',
            'role' => 'Client',
            'licence_expiery'=>'2019-07-27',
            'password' => Hash::make('Client.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'licence_number' => '2473236',
            'first_name' => 'Janet',
            'surname' => 'Kabui',
            'email'=>'janet@email.com',
            'phone_number'=>'0789340999',
            'national_id'=>'46574533',
            'role' => 'Client',
            'licence_expiery'=>'2019-09-09',
            'password' => Hash::make('Client.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'licence_number' => '2467603',
            'first_name' => 'Mercy',
            'surname' => 'Bonareri',
            'email'=>'mercy@email.com',
            'phone_number'=>'0788932477',
            'national_id'=>'44853945',
            'role' => 'Client',
            'licence_expiery'=>'2018-04-30',
            'password' => Hash::make('Client.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'licence_number' => '2458932',
            'first_name' => 'Louisa',
            'surname' => 'Wamuyu',
            'email'=>'louisa@email.com',
            'phone_number'=>'0799934278',
            'national_id'=>'45934538',
            'role' => 'Client',
            'licence_expiery'=>'2018-09-18',
            'password' => Hash::make('Client.2019'),
            'is_active'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
