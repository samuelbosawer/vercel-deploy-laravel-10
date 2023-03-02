<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contributors>
 */
class ContributorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // personal info
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement([
                'Male', 'Female', 'Other'
            ]),
            'about' => $this->faker->paragraph(10),
            // 'profile_picture' => $this->faker->imageUrl(),
            
            // profesional info
            'job_title' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            
            // contact
            'address' => $this->faker->address(),
            'email' => $this->faker->email(),
            'whatsapp' => $this->faker->phoneNumber(),
            'website' => $this->faker->randomElement([
                'https://nokensoft.com', 'https://sacode.web.id', 'https://sagufoundation.org'
            ]),
            
            // social media
            'facebook' => $this->faker->randomElement(['https://facebook.com/']),
            'twitter' => $this->faker->randomElement(['https://twitter.com/']),
            'instagram' => $this->faker->randomElement(['https://instagram.com/']),
            'linkedin' => $this->faker->randomElement(['https://linkedin.com/']),
            'youtube' => $this->faker->randomElement(['https://youtube.com/']),
            'github' => $this->faker->randomElement(['https://github.com/']),
            
        ];
    }
}
