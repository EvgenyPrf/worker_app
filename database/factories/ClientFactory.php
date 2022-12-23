<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'surname' => fake()-> lastName,
            'email' => fake()->unique()->safeEmail(),
            'tel_number' => fake()->randomNumber(),
            'age' => fake()->numberBetween(18, 60),
            'is_married' => fake()->boolean,
            'description' => fake()-> text,
        ];
    }
}
