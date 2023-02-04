<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(2),
            'slug' => fake()->slug(2),
            'description' => fake()->paragraph(),
            'page_title' => fake()->sentence(),
            'meta_description' => fake()->sentence(),
            'featured' => fake()->boolean(),
            'image' => sprintf('img%s.jpeg', fake()->numberBetween(1, 5)),
        ];
    }
}
