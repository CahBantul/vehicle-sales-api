<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Motor::factory(20)->create();
    }
}