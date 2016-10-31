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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->email,
        'password' => bcrypt('1234'),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' =>$faker->title,
        'text' =>$faker->paragraph,
    ];
});

$factory->define(App\Picture::class, function (Faker\Generator $faker) {
    return [
        'name' =>$faker->image,
		'description' =>$faker->realText(),
    ];
});