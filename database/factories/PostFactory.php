<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(14),
            'body' => fake()->text(200),
            'created_at' => now(),
            'published_at' => now(),
            'user_id' => fake()->numberBetween('1','10')
        ];
    }
}
