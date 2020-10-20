<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class Cars extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::factory()->times(20)->create();
    }
}
