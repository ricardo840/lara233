<?php
namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */ 
class CategoryFactory extends Factory{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */ 
    public function definition(): array
    {
        static $index = 0;

        $categories = [
            'Electrónica',
            'Ropa y Moda',
            'Hogar y Jardín',
            'Deportes y Fitness',
            'Juguetes y Juegos',
            'Belleza y Cuidado Personal',
            'Alimentos y Bebidas',
        ];

        $descriptions = [
            'Dispositivos electrónicos, gadgets y accesorios tecnológicos de última generación.',
            'Prendas de vestir, calzado y accesorios para hombre, mujer y niños.',
            'Muebles, decoración, utensilios y productos para el hogar y jardín.',
            'Equipamiento deportivo, ropa técnica y accesorios para mantenerse activo.',
            'Juguetes educativos, juegos de mesa y entretenimiento para todas las edades.',
            'Productos de skincare, maquillaje, perfumería y cuidado personal.',
            'Alimentos gourmet, bebidas, snacks y productos de despensa.',
        ];

        $name = $categories[$index % count($categories)];
        $description = $descriptions[$index % count($descriptions)];
        $index++;

        return [
            'name'        => $name,
            'description' => $description,
        ];
    }
}