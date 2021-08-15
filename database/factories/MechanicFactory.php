<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mechanic;
use Faker\Generator as Faker;

$factory->define(Mechanic::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
