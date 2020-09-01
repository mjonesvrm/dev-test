<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Driver::class, function (Faker $faker) {

    $companies = Company::all()->pluck('id')->toArray();

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'mobile' => $faker->phoneNumber,
        'company_id' => $faker->randomElement($companies),
    ];
});
