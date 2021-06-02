<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Customer
        DB::table('users')->insert([
            [
                'full_name'=>'Prajwal Customer',
                'username'=>'Customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('1111'),
                'status'=>'active',
            ],
        ]);

        //admin
        DB::table('admins')->insert([
            [
                'full_name'=>'Prajwal Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1111'),
                'status'=>'active',
            ],
        ]);
    }
}
