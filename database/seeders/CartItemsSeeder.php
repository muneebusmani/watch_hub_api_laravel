<?php

namespace Database\Seeders;

use App\Models\CartItems;
use Illuminate\Database\Seeder;

class CartItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CartItems::factory()->count(30)->create();
    }
}
