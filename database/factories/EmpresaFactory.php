<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empresa;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'cnpj' => $faker->numberBetween(11111111111111, 99999999999999),
        'razao' => $faker->name,
        'fantasia' => $faker->firstName
    ];
});
