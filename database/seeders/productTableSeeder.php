<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category=category::query()->firstOrCreate([
            'name' => 'Categoria 1',
            'description' => 'Descripción de la categoria 1'
        ]); //obtener la primera categoria de la tabla, si no existe se puede crear una nueva categoria
        
        
        Product::create([  //o usar make para crear el objeto sin guardarlo en la base de datos
            'name' => 'Producto 1',
            'description' => 'Descripción del producto 1',
            'descriptionLong' => 'Descripción larga del producto 1',
            'price' => 9.99,
            'id_category' => $category->id
        ]);
        //
    }
}
