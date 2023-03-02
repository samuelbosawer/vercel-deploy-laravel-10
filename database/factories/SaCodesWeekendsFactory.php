<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaCodesWeekend>
 */
class SaCodesWeekendsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 
            'topic' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'poster' => $this->faker->imageUrl(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'status' => $this->faker->randomElement(['active', 'trash']),
        ];
    }
}
