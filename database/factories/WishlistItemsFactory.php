<?php

namespace Database\Factories;

use App\Models\Watches;
use App\Models\Wishlist;
use App\Models\WishlistItems;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WishlistItems>
 */
class WishlistItemsFactory extends Factory
{
    /** @psalm-suppress missingpropertytype */
    protected $model = WishlistItems::class;

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
