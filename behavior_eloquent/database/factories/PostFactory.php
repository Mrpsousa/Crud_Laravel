<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function(Faker $faker){
    return [
        'title' => $faker->sentece(8),
        'subtitle' => $faker->sentece(16),
        'description' => $faker->sentece(10)
    ];
});
