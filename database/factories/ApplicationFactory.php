<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    return [
        // "name" => $faker->word,
        "pitch" => $faker->paragraph,
        
        "opportunity_id" => function () {
            return \App\User::all()->random();
        },
        "user_id" => function () {
            return \App\User::all()->random();
        }
    ];
});
