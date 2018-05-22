<?php

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    $categories = App\Category::pluck('id')->toArray();
    $locations = App\Location::pluck('id')->toArray();
    return [
        'title' => $faker->text(10),
        'description' => $faker->text(50),
        'user_id' => $faker->randomElement($users),
        'category_id' => $faker->randomElement($categories),
        'location_id' => $faker->randomElement($locations)
    ];
});

