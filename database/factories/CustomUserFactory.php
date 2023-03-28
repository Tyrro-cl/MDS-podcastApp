<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomUser>
 */
class CustomUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name,
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'password' => Hash::make('password'),
            'created_at' => now(''),
            'updated_at' => now(),
        ];
    }
}
