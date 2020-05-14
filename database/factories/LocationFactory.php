<?php
// database/factory/LocationFactory.php
use App\Location;
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
$factory->define(Location::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'cap' => $faker->numberBetween($min = 1000, $max = 9000),
        'description' => $faker->text($maxNbChars = 100),
        'email' => $faker->companyEmail()
        //'email' => $faker->email($maxNbChars = 200) (testje - onderzoeken indien mogelijk)
    ];
});
