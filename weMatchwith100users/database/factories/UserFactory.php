<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'slug'=> $faker->unique()->optional()->slug,
        'gender' => $faker->randomElement(['male', 'female']),
        'avatar'=> $faker->image('default.jpg',400,300),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'q1'=> $faker->q1->between($min = 1, $max = 5),
        'q2'=> $faker->q2->between($min = 1, $max = 5),
        'q3'=> $faker->q3->between($min = 1, $max = 5),
        'q4'=> $faker->q4->between($min = 1, $max = 3),
        'q5'=> $faker->q5->between($min = 1, $max = 5),
        'q6'=> $faker->q6->between($min = 1, $max = 2),
        'q7'=> $faker->q7->between($min = 1, $max = 2),
        'q8'=> $faker->q8->between($min = 1, $max = 2),
        'q9'=> $faker->q9->between($min = 1, $max = 2),
        'q10'=> $faker->q10->between($min = 1, $max = 5),
        'q11'=> $faker->q11->between($min = 1, $max = 6),
        'q12'=> $faker->q12->between($min = 1, $max = 6),
        'importance1'=> $faker->importance1->between($min = 1, $max = 5),
        'importance2'=> $faker->importance2->between($min = 1, $max = 5),
        'importance3'=> $faker->importance2->between($min = 1, $max = 5),
        'importance4'=> $faker->importance4->between($min = 1, $max = 5),
        'importance5'=> $faker->importance5->between($min = 1, $max = 5),
        'importance7'=> $faker->importance7->between($min = 1, $max = 5),
        'importance9'=> $faker->importance9->between($min = 1, $max = 5),
        'importance10'=> $faker->importance10->between($min = 1, $max = 5),
        'importance11'=> $faker->importance11->between($min = 1, $max = 5),
        'importance12'=> $faker->importance12->between($min = 1, $max = 5),
        'remember_token' => str_random(10),
    ];
});
