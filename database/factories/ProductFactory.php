<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'description' => fake()->sentence(7),
            'descriptionLong' => fake()->text,
            'price' => fake()->randomFloat(2, 1, 100),
            'id_category' => category::query()->inRandomOrder()->value('id'),
        ];

    }
}

//7 categoria
//30 productos por categorias 