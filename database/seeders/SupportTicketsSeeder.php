<?php

namespace Database\Seeders;

use App\Models\SupportTickets;
use Illuminate\Database\Seeder;

class SupportTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupportTickets::factory()->count(10)->create();
    }
}
