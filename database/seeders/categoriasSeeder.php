<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Generame 10 registros de categorias de comida rapida con nombre y slug

        DB::table('categorias')->insert([
            'name' => 'Hamburguesas',
            'slug' => 'hamburguesas',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Bebidas',
            'slug' => 'bebidas',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Postres',
            'slug' => 'postres',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Pizzas',
            'slug' => 'pizzas',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Parrillas',
            'slug' => 'parrillas',
        ]);
    }
}
