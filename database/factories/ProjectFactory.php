<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'city_id' => $faker->numberBetween(1, 50),
        'company_id' => $faker->numberBetween(1, 50),
        'user_id' => $faker->numberBetween(1, 50),
        'budget' => $faker->randomFloat(2, 1000, 10000),
        'name' => $faker->word,
        'execution_date' => $faker->dateTime(),
        'is_active' => $faker->boolean,
    ];
});
