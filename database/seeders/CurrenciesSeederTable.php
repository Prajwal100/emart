<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert(
            [
                [
                    'name'=>'USA Dollar',
                    'symbol'=>'$',
                    'exchange_rate'=>1,
                    'code'=>'USD'
                ],
                [
                    'name'=>'Nepali Ruppes',
                    'symbol'=>'Rs.',
                    'exchange_rate'=>115,
                    'code'=>'NEP'
                ]
            ]

        );
    }
}
