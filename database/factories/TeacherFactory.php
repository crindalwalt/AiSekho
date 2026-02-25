<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeacherFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            "email" => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->optional()->numerify('##########'),
            'password' => bcrypt('password'), // Default password for testing
            "gender" => $this->faker->randomElement(['male', 'female', 'other']),
            'slug' => Str::slug($name) . '-' . fake()->unique()->numberBetween(100,999),

            'title' => $this->faker->randomElement([
                'Senior AI Research Scientist',
                'Data Science Expert',
                'Machine Learning Engineer',
                'AI Product Designer',
                'Deep Learning Specialist'
            ]),

            'bio' => $this->faker->paragraph(4),

            'image' => $this->faker->imageUrl(600, 800, 'people', true),

            'linkedin' => $this->faker->url(),
            'twitter' => 'https://twitter.com/' . $this->faker->userName(),

            'students_count' => $this->faker->numberBetween(1000, 50000),
            'rating' => $this->faker->randomFloat(1, 4, 5), // 4.0 - 5.0
            'reviews_count' => $this->faker->numberBetween(100, 10000),
        ];
    }
}