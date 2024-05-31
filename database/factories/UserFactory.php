<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /** @psalm-suppress missingpropertytype */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            // 'password' => bcrypt('password'), // you can use Hash::make() if you prefer
            'password' => Hash::make('password'),  // you can use Hash::make() if you prefer
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
