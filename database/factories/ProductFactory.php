<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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



        $path = public_path('uploads/products');
        $files = File::allFiles($path);

        $randomFile = pathinfo($files[rand(0, count($files) - 1)]);
        $fileName = $randomFile['basename'];
        $fileLink = 'uploads/products/' . $fileName;

        return [
            'name' => fake()->word(),
            'desc' => fake()->text(100),
            'price' => fake()->randomFloat(2, 0, 1000),
            'imageUrl' => $fileLink,
            'size' => fake()->randomElement(['XS', 'S', 'M', 'L', 'XL']),
            'isPublished' => fake()->boolean(),
            'state' => fake()->randomElement(['promotion', 'standard']),
            'reference' => fake()->regexify('[A-Za-z0-9]{16}'),
            'category_id' => fake()->randomElement(Category::pluck('id')->toArray()),
        ];
    }
}
