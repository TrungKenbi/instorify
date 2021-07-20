<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$12$Aln/RAMIW0exYr/PJc1eLe.WLe5qFklhFhZiAQQnKKCb2EhfRJwlm', // 23456789
        'remember_token' => Str::random(10),

        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,

        'dob' => $faker->dateTimeBetween('1990-01-01', '2000-12-31'),
        'gender' => $faker->randomElement(['male', 'female']),

    ];
});
