<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        $product_name = $this->faker->firstName();
        return [
            'name' => $product_name,
            'price' => $this->faker->numberBetween(500000, 1000000),
            'description' => $this->faker->text(),
            'slug' => Str::slug($product_name),
        ];
    }
}
