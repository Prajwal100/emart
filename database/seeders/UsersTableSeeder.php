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
        DB::table('users')->insert([

//            Admin
            [
                'full_name'=>'Prajwal Admin',
                'username'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'admin',
                'status'=>'active',
            ],
//            Seller
            [
                'full_name'=>'Prajwal Vendor',
                'username'=>'vendor',
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'vendor',
                'status'=>'active',
            ],
//            Customer
            [
                'full_name'=>'Prajwal Customer',
                'username'=>'Customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'customer',
                'status'=>'active',
            ],
        ]);
    }
}
