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

//$factory->define(App\User::class, function ($faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//        'password' => str_random(10),
//        'remember_token' => str_random(10),
//    ];
//});

$factory->define(App\Events::class, function ($faker) {
    return [
        'event_id' => $faker->randomNumber(5),
        'user_id' => $faker->numberBetween(1,50),
        'title'=> $faker->words(4, true),
        'description' => $faker->sentences(5, true)
    ];

});

$factory->define(App\User::class, function ($faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name'=> $faker->lastName(),
        'email' => $faker->email,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10)
    ];

});
