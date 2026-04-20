<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        category::factory(3)->create()->each(function ($category) {
            product::factory(30)->create([
                'id_category' => $category->id
            ]);
        });

       // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

    }
}
