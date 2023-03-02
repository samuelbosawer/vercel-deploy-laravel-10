<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            // Blog
            'article_title' => $this->faker->sentence(10),
            'article_content' => $this->faker->sentence(50),
            'type_content' => $this->faker->sentence(5) ,
            'status_content' =>$this->faker->randomElement([
                '1', '0',
            ]),
            'slug_content' => $this->faker->sentence(1),
            'image_content' => $this->faker->imageUrl(),
        ];
    }
}
