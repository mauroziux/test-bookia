<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DiningArea;
use Faker\Generator as Faker;

$factory->define(DiningArea::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
    ];
});
