<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'todo' => $faker->sentence(7),
        'progress' => $faker->biasedNumberBetween(0, 100)
    ];
});
