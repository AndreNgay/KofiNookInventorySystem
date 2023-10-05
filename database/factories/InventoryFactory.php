<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'item_name' => fake()->unique()->word(),
            'image' => fake()->image(),
            'description' => fake()->sentence(),
            'stock' => fake()->numberBetween(0, 100),
            'required_stock' => fake()->numberBetween(0, 100),
            'unit_id' => fake()->numberBetween(1, 20),
            'category_id' => fake()->numberBetween(1, 20),
            'cost' => fake()->randomFloat(2, 0, 100),
            // 'type' => fake()->randomElement(['raw', 'finished']),
            'type' => fake()->unique()->word(),
        ];
    }
}
