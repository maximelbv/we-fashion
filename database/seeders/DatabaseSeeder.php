<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Men'],
            ['name' => 'Women'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
        Product::factory(50)->create();
        User::factory(10)->create();
        // User::factory()->admin()->create(['name' => 'Edouard']);
    }
}
