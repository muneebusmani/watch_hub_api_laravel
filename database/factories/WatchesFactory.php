<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Watches>
 */
class WatchesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand'       => $this->faker->company,
            'model'       => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price'       => $this->faker->randomFloat(2, 50, 1000),
            'stock'       => $this->faker->numberBetween(1, 100),
            'category_id' => Categories::factory(),
            'created_at'  => now(),
            'updated_at'  => now(),
        ];
    }
}
