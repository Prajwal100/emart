<?php

namespace Database\Seeders;

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

//         \App\Models\Product::factory(500)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(CurrenciesSeederTable::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(AboutusSeederTable::class);
        $this->call(ProductsTableSeeder::class);
    }
}
