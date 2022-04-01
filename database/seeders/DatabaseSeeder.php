<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MonosSeeder;
use Database\Seeders\ClasificacionSeeder;
use Database\Seeders\MonoclasificacionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(MonosSeeder::class);
        $this->call(ClasificacionSeeder::class);
        //$this->call(MonoclasificacionSeeder::class);
    }
}
