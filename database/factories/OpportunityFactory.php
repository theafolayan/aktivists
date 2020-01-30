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
        "body"=>$faker->paragraph(50, true),
        "category" => $faker->randomElement(['Writing', 'Logistics', 'Teaching', 'Graphics', 'Protocol', 'Media', 'Welfare', 'I.T', 'Other']),
        "url" => $faker->url,
        "location" => $faker->randomElement([
            "Ghana",
            "Kenya",
            "Abia",
            "Adamawa",
            "Anambra",
            "Akwa Ibom",
            "Bauchi",
            "Bayelsa",
            "Benue",
            "Borno",
            "Cross River",
            "Delta",
            "Ebonyi",
            "Enugu",
            "Edo",
            "Ekiti",
            "FCT - Abuja",
            "Gombe",
            "Imo",
            "Jigawa",
            "Kaduna",
            "Kano",
            "Katsina",
            "Kebbi",
            "Kogi",
            "Kwara",
            "Lagos",
            "Nasarawa",
            "Niger",
            "Ogun",
            "Ondo",
            "Osun",
            "Oyo",
            "Plateau",
            "Rivers",
            "Sokoto",
            "Taraba",
            "Yobe",
            "Zamfara",
        ]),
        "type"=> $faker->randomElement(['full-time', 'part-time', 'remote-fulltime', 'remote-part-time']),
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
