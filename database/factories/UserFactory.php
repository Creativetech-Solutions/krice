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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Category::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'slug' => $faker->name,

    ];
});

$factory->define(App\City::class, function (Faker $faker) {
    return [

        'name' => $faker->city,
        'slug' => $faker->name,

    ];
});

$factory->define(App\Area::class, function (Faker $faker) {
    return [
        'city_id'=> function(){
			return factory('App\City')->create()->id;
        },
        'name' => $faker->name,
        'slug' => $faker->name,

    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'category_id'=> function(){
			return factory('App\Category')->create()->id;
        },
        'name' => $faker->name,
        'slug' => $faker->name,
        'description'=>$faker->sentence,

    ];
});

$factory->define(App\Supplier::class, function (Faker $faker) {
    return [
        'area_id'=> function(){
            return factory('App\Area')->create()->id;
        },
        'name' => $faker->name,
        'address' => $faker->address,
        'contact'=>$faker->phoneNumber,
        'description'=>$faker->sentence,
        'manager_name' => $faker->name,
        'manager_contact'=>$faker->phoneNumber,

    ];
});

