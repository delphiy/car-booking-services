<?php

use App\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceType::Create([
            'name' => 'Full',
            'car_service_id' => 1
        ]);

        ServiceType::Create([
            'name' => 'Interim',
            'car_service_id' => 2
        ]);
    }
}
