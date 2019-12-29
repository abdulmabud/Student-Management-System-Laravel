<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'birth' => $faker->dateTimeThisDecade,
        'gender' => $faker->randomElement(['Male', 'Female']),
        'class' => $faker->randomElement(['Class One', 'Class Two']),
        'address' => $faker->address,
        'fatherName' => $faker->name,
        'fatherPhone' => $faker->phoneNumber, 
        'status' => 'publish'
    ];
});
