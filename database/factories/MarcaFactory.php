<?php
    /* ==========================================================================
    ** Marca Factory
    ** 19/01/2019
    ** php artisan make:factory MarcaFactory
    ** Use Model
    ** Alan Medina Silva
    ** ========================================================================== */
use Faker\Generator as Faker;

$factory->define(App\Model\Marca::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->text(50)
    ];
});
