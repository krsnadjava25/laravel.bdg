<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'user_id' => $faker->numberBetween(1, User::count())
    ];
});
