<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'caption' => $faker->sentence,
        'url' => $faker->imageUrl(320,240),
        'user_id' => $faker->numberBetween(1, User::count())
    ];
});
