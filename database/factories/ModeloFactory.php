<?php

use Faker\Generator as Faker;
use App\Model\Marca;

$factory->define(App\Model\Modelo::class, function (Faker $faker) {
    return [
        //
        'marca_id' => function() {
            return Marca::all()->random();
        },
        'nombre' => $faker->text(50)

    ];
});
