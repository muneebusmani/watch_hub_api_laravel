<?php

namespace Database\Factories;

use App\Models\CartItems;
use App\Models\ShoppingCart;
use App\Models\Watches;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItems>
 */
class CartItemsFactory extends Factory
{
    protected $model = CartItems::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cart_id' => ShoppingCart::factory(),
            'watch_id' => Watches::factory(),
            'price' => $this->faker->randomFloat(2, 50, 1000),
            'quantity' => $this->faker->numberBetween(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
