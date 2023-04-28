<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "desc" => fake()->sentence(10),
            "price" => fake()->randomFloat(2, 0, 100),
            "imageUrl" => fake()->imageUrl(200, 200),
            "isPublished" => fake()->randomElement(["published", "not_published"]),
            "state" => fake()->randomElement(["discount_applied", "standard"]),
            "reference" => fake()->unique()->text(16),
            "category_id" => Category::all()->random()->id
        ];
    }
}
