<?php

    /* ==========================================================================
    ** Migration File to Handle the Cars MARCAS
    ** php artisan make:migration create_marcas_table --create=marcas
    ** php artisan migrate
    ** 19/01/2019
    ** Alan Medina Silva
    ** ========================================================================== */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
