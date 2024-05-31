<?php

namespace Database\Factories;

use App\Models\Watches;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WishlistItems>
 */
class WishlistItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'wishlist_id' => Wishlist::factory(),
            'watch_id' => Watches::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
