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

$factory->define(Edutrans\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Edutrans\Mensagem::class, function (Faker\Generator $faker) {
    return [
        'mensagem' => $faker->sentence(10),
    ];
});

$factory->define(Edutrans\HistoricoMensagem::class, function (Faker\Generator $faker) {
    return [
        'placa' => substr(strtoupper($faker->word()),0,3) .'-'. $faker->numberBetween(1000,9999),
        'id_mensagem' => $faker->numberBetween(1,10),
        'latitude' => $faker->latitude(),
        'longitude' => $faker->longitude(),
    ];
});


