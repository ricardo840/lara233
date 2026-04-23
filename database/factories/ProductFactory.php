<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => ucwords(implode(' ', fake()->words(3))),
            'description' => fake()->sentence(8),
            'descriptionLong' => fake()->paragraph(3),
            'price' => fake()->randomFloat(2, 5, 999),
            'id_category' => Category::query()->inRandomOrder()->value('id') ?? Category::factory()->create()->id,
        ];

    }
}

//7 categoria
//30 productos por categorias 