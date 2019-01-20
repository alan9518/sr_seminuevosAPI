<?php

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Create 30 Brand Names Using Marcas Class
     * @return void
     */
    public function run()
    {
        //
        factory(App\Marca::class,30)->create();
    }
}
