<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
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

$factory->define(Post::class, function (Faker $faker) {

    return [
        'user_id' => random_int(1,50),
        'title' => $faker->company,
        'image' => "https://i.picsum.photos/id/".random_int(1,100)."/536/354.jpg",
        'thumbnail' => "https://i.picsum.photos/id/".random_int(1,100)."/367/267.jpg",
        'content' => $faker->paragraph(),
        'start' => date('Y-m-d'),
        'finish' => date('Y-m-d',mktime(0,0,0,date('m'),40,date('Y'))),
        'published' => 1
    ];

});
