<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        $name = fake()->unique()->sentence(3);
        $price = fake()->randomFloat(2, 20, 500);

        return [

            // Basic Info
            'name' => $name,
            'excerpt' => fake()->sentence(12),
            'description' => fake()->paragraphs(4, true),
            'slug' => Str::slug($name) . '-' . Str::random(5),
            'thumbnail' => 'courses/default.jpg',
            'video_url' => fake()->optional()->url(),

            'level' => fake()->randomElement([
                'beginner',
                'intermediate',
                'advanced'
            ]),

            // Course Details
            'read_time' => fake()->numberBetween(5, 120),
            'lessons_count' => fake()->numberBetween(5, 50),

            // Pricing
            'price' => $price,
            'discount_price' => fake()->boolean(60)
                ? fake()->randomFloat(2, 10, $price)
                : null,

            // Status
            'status' => fake()->randomElement([
                'draft',
                'published',
                'inactive'
            ]),

            // Because teacher_id is STRING in your migration
            'teacher_id' => fake()->uuid(),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Factory States (Optional but Professional)
    |--------------------------------------------------------------------------
    */

    public function published()
    {
        return $this->state(fn () => [
            'status' => 'published',
        ]);
    }

    public function draft()
    {
        return $this->state(fn () => [
            'status' => 'draft',
        ]);
    }

    public function beginner()
    {
        return $this->state(fn () => [
            'level' => 'beginner',
        ]);
    }
}