<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutUs>
 */
class AboutUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'heading' => $this->faker->unique()->sentence(),
            'title' => $this->faker->unique()->word(),
            'image' =>$this->faker->imageUrl($width= 640, $height=480),
            'detail' =>$this->faker->text(),
        ];
    }
}
