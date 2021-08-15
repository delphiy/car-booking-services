<?php

use App\CarService;
use Illuminate\Database\Seeder;

class CarServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarService::Create([
            'name' => 'Oil change',
        ]);

        CarService::Create([
            'name' => 'Tyres',
        ]);

        CarService::Create([
            'name' => 'Suspension',
        ]);

    }
}
