<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empresa;
use App\Model;
use App\Movimento;
use Faker\Generator as Faker;

$factory->define(Movimento::class, function (Faker $faker) {
    return [
        'empresa_id' => function () {
            return factory(Empresa::class)->create()->id;
        },
        'data' => $faker->date(),
        'qtd_vendas' => $faker->randomNumber(3),
        'vl_total_vendas' => $faker->randomFloat(2, 0, 5000),
        'ticket_medio' => $faker->randomFloat(2, 0, 5000),
        'pecas_vendidas' => $faker->randomNumber(3),
        'pecas_atendimento' => $faker->randomFloat(2, 0, 5000),
        'markup' => $faker->randomFloat(2, 0, 5000),
        'clientes_identificados' => $faker->randomNumber(3),
    ];
});
