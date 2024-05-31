<?php

namespace Database\Factories;

use App\Models\Images;
use App\Models\Watches;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Images>
 */
class ImagesFactory extends Factory
{
    /** @psalm-suppress missingpropertytype */
    protected $model = Images::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'watch_id' => Watches::factory(),
            'image_url' => $this->faker->imageUrl,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
