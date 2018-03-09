<?php
use Faker\Generator as Faker;


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

/**@var |Illuminate|Database|Eloquent|Factory $factory */
$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'), // secret
        'remember_token' => str_random(10),
    ];
});
/**@var |Illuminate|Database|Eloquent|Factory $factory */

$factory->define(App\Tickets::class, function (Faker $faker) {
    return [
        'message' => $faker->text($maxNbChars = 200),
        'priorites_id' => $faker->numberBetween(1,5),
        'users_id' => $faker->numberBetween(2,10),

    ];
});
