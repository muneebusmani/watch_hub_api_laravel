<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupportTickets>
 */
class SupportTicketsFactory extends Factory
{
    /** @psalm-suppress missingpropertytype */
    protected $model = SupportTicketsFactory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'subject' => $this->faker->sentence,
            'message' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['open', 'closed']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
