<?php

namespace Database\Seeders;

use App\Models\WishlistItems;
use Illuminate\Database\Seeder;

class WishlistItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WishlistItems::factory()->count(20)->create();
    }
}
