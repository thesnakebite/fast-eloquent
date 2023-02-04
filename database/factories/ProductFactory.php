<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(4),
            'category_id' => ProductCategory::factory(),
            'description' => fake()->paragraph(),
            'page_title' => fake()->sentence(),
            'meta_description' => fake()->sentence(),
            'featured' => fake()->boolean(),
            'image' => sprintf('img%s.jpeg', fake()->numberBetween(1, 5)),
            'status' => fake()->randomElement(['draft', 'pending', 'published']),
        ];
    }
}
