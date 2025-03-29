<?php

namespace Database\Factories;

use App\Models\Work;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraphs(3, true),
            'salary' => $this->faker->numberBetween(30000, 120000),
            'location' => $this->faker->city(),
            'category' => $this->faker->randomElement(Work::$categories),
            'experience' => $this->faker->randomElement(
                Work::$experienceLevels
            ),
            'company' => $this->faker->company(),
            'company_logo' => $this->faker->imageUrl(640, 480, 'business'),
        ];
    }
}
