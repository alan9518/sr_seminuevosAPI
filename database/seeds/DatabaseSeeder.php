<?php

/* ==========================================================================
** Marcas Table Dummy Data Generator
** 19/01/2019
** php artisan make:seeder MarcasTableSeeder
** Alan Medina Silva
** ========================================================================== */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
    }
}
