<?php

use App\Mechanic;
use Illuminate\Database\Seeder;

class MechanicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mechanic::class, 50)->create();
    }
}
