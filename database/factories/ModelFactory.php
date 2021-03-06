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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});




$factory->define(App\Pedido::class , function(Faker\Generator $faker) {
	return [
		'number' => $faker->unique()->numberBetween(111111, 999999),
		'buyer' => $faker->name(),
		'payment_method' => $faker->creditCardType,
		'payment_id' => $faker->unique()->numberBetween(111111, 999999),
		'total' => $faker->randomFloat(2 , 10 , 9999),
		'carrier' => $faker->randomElement($array = ['FedEx', 'DHL', 'Redpack', 'Estafeta']),
		'carrier_guide' => $faker->unique()->numberBetween(111111, 999999),
		'status' => $faker->randomElement($array = array (1, 2, 3, 4, 5)),
	];
});








