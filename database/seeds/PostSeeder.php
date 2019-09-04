<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //si tengo problemas con las claves foraneas

        DB::table('posts')->truncate(); //me aseguro de eliminar todos los datos para evitar duplicados

        DB::table('posts')->insert([
            'title' => 'Titulo man',
            'description' => 'Descripcion 1 manual'
        ]);
    }
}
