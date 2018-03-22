<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Video::class, function (Faker $faker) {
    $urls = [
        'https://www.youtube.com/embed/NU4TGxYZEjs',
        'https://www.youtube.com/embed/fq4N0hgOWzU',
        'https://www.youtube.com/embed/rrT6v5sOwJg',
        'https://www.youtube.com/embed/vcBGj4R7Fo0'
    ];
    return [
        'caption' => $faker->sentence,
        'url' => $urls[$faker->numberBetween(0, sizeof($urls)-1)],
        'user_id' => $faker->numberBetween(1, User::count())
    ];
});
