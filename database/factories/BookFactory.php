<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => random_int(1,3),
            'title' => fake()->word(),
            'slug' => fake()->slug(),
            'thumbnail_url' => 'Book.jpg',
            'author' => fake()->name(),
            'synopsis' => fake()->paragraph(2),
        ];
    }
}
