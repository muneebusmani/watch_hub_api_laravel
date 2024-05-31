<?php

namespace Database\Factories;

use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\Watches;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItems>
 */
class OrderItemsFactory extends Factory
{
    /** @psalm-suppress missingpropertytype */
    protected $model = OrderItems::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Orders::factory(),
            'watch_id' => Watches::factory(),
            'quantity' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(2, 50, 1000),
            'status' => $this->faker->randomElement(['pending', 'shipped', 'delivered']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
