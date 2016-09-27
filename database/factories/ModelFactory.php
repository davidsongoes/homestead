<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Jobs\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Jobs\Job::class, function (Faker\Generator $faker){
    return [
      'user_id' => mt_rand(1,27),
        'title' => $faker->realText(100),
        'description' => implode("\n", $faker->paragraphs),
        'expires_at' => $faker->randomElements([null, $faker->date('Y-m-d')])
    ];
});
