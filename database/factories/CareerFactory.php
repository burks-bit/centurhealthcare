<?php

namespace Database\Factories;
use App\Models\Career;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['open', 'closed']),
        ];
    }
}
