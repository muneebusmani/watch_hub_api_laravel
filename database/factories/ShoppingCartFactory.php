<?php

namespace Database\Factories;

use App\Models\ShoppingCart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShoppingCart>
 */
class ShoppingCartFactory extends Factory
{
    /** @psalm-suppress missingpropertytype */
    protected $model = ShoppingCart::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
