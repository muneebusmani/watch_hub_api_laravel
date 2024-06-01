<?php

namespace Database\Seeders;

use App\Models\Watches;
use Illuminate\Database\Seeder;

class WatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Watches::factory()->count(20)->create();
    }
}
