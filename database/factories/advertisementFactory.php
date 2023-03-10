<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\advertisement>
 */
class advertisementFactory extends Factory
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
            'detail' =>$this->faker->text(),
        ];
    }
}
