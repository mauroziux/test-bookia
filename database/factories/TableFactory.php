<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Table;
use Faker\Generator as Faker;

$factory->define(Table::class, function (Faker $faker) {
    return [
        'name' => 'table '.$faker->numberBetween(1, 4),
        'minimum_capacity' => $faker->numberBetween(2, 3),
        'maximum_capacity' => $faker->numberBetween(4, 5),
        'active' => 1,
        'restaurant_id' => $faker->numberBetween(1, 2),
        'dining_area_id' => $faker->numberBetween(1, 2),
    ];
});
