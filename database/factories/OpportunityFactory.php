<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Opportunity;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Opportunity::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [

        "title" => $title,
        "slug" => Str::slug($title),
        "email" => $faker->email,
        "body"=>$faker->paragraph(5, true),
        "category" => $faker->randomElement(['Writing', 'Logistics', 'Teaching', 'Graphics', 'Other']),
        "url" => $faker->url,
        "location" => $faker->randomElement(['Lagos', 'Accra', 'Abuja', 'Owerri', 'Cape Town']),
        "type"=> $faker->randomElement(['full-time', 'part-time']),
        "views" => $faker->numberBetween(23, 6000),
        "image" => $faker->imageUrl(300, 300, 'business'),
        "user_id" => function () {
            return \App\User::all()->random();
        },
        // "opportunity_id" => function () {
        //     return \App\Opportunity::all()->random();
        // }
    ];
});
