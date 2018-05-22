<?php

use Faker\Generator as Faker;

$factory->define(\App\Location::class, function (Faker $faker) {
    return [
        'location_name' => $faker->text(10)
    ];
});
