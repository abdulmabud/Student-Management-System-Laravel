<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'Name' => $faker->name,
        'Phone' => $faker->phoneNumber,
        'Email' => $faker->email,
        'photo' => $faker->imageUrl(640,480),
        'Status' => 'publish'

    ];
});
