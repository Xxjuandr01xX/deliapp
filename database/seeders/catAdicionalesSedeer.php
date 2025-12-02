<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catAdicionalesSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * generame 10 ingredientes adicionales de comida rapida
         */

       
       DB::table('cat_ingredientes')->insert([
            'name' => 'Queso',
            'slug' => 'queso',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Champiñones',
            'slug' => 'champiñones',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Chorizo',
            'slug' => 'chorizo',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Jalapeno',
            'slug' => 'jalapeno',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Pimientos',
            'slug' => 'pimientos',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Cebolla',
            'slug' => 'cebolla',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Queso rallado',
            'slug' => 'queso-rallado',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Champiñones',
            'slug' => 'champiñones',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Queso rallado',
            'slug' => 'queso-rallado',
        ]);

        DB::table('cat_ingredientes')->insert([
            'name' => 'Peperoni',
            'slug' => 'peperoni',
        ]);
        

        DB::table('cat_adicionales')->insert([
            'name' => 'Queso',
            'slug' => 'queso',
        ]);

        DB::table('cat_adicionales')->insert([
            'name' => 'Champiñones',
            'slug' => 'champiñones',
        ]);

        DB::table('cat_adicionales')->insert([
            'name' => 'Chorizo',
            'slug' => 'chorizo',
        ]);

        DB::table('cat_adicionales')->insert([
            'name' => 'Jalapeno',
            'slug' => 'jalapeno',
        ]);

        DB::table('cat_adicionales')->insert([
            'name' => 'Pimientos',
            'slug' => 'pimientos',
        ]);

    }
}
