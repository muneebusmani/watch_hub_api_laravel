<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            UserProfileSeeder::class,
            CategoriesSeeder::class,
            WatchesSeeder::class,
            ImagesSeeder::class,
            ShoppingCartSeeder::class,
            CartItemsSeeder::class,
            WishlistSeeder::class,
            WishlistItemsSeeder::class,
            OrdersSeeder::class,
            OrderItemsSeeder::class,
            ReviewsSeeder::class,
            SupportTicketsSeeder::class,
            FeedbackSeeder::class,
            FAQSeeder::class,
        ]);
    }
}
