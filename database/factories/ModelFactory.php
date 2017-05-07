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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [

        'name'           => "$faker->firstNameMale $faker->lastName",
        'email'          => 'bretanac@gmail.com',
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title'   => $faker->sentence,
        'content' => $faker->paragraph,
        'user_id' => 1,
    ];
});

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->paragraph,
        'post_id' => 1,
        'user_id' => 1,
    ];
});

$factory->define(App\Models\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement(
            [
                'angularjs',
                'jquery',
                'wordpress',
                'php',
                'mysql',
                'laravel',
                'symfony',
                'python',
                'django',
                'python',
                'go',
                '.net',
                'nodejs',
                'assembly',
                'mysql',
                'postgre',
                'mariadb',
                'sqlite3',
                'php7',
                'grav',
            ]),
    ];
});
