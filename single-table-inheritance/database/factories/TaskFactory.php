<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    $type = $faker->randomElement(['feature', 'bug']);
    $reporter_id = 1;
    return [
        'name' => $faker->realText,
        'project_id' => 1,
        'type' => $type,
        'reporter_id' => $type === 'bug' ? $reporter_id : null
    ];
});
