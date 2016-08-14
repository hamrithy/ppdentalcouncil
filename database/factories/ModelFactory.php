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
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\NewsPost::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'article_text' => $faker->paragraph,
        'category_id' => function () {
            return factory('App\Category')->create()->id;
        }
    ];
});


$factory->define(App\NewsPostPhoto::class, function (Faker\Generator $faker) {
    return [
        'newspost_id' => function () {
            return factory('App\NewsPost')->create()->id;
        },
        //'file_name' => $faker->image('\wamp\www\test_laravel\public\image\news', 640, 480, null, $fullPath = false),
        'file_name' => $faker->imageUrl,
    ];
});


$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

