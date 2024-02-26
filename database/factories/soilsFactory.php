<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class soilsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            //'user_id' => \App\Models\User::factory(), // Crée un utilisateur associé de manière aléatoire
            'PIPN' => $this->faker->randomFloat(2, 1, 100), // Génère une superficie aléatoire entre 1 et 100
            'SOC' => $this->faker->address, // Génère une adresse aléatoire
            'pH' => $this->faker->word, // Génère un nom de culture aléatoire
            'Ca' => $this->faker->date(), // Génère une date de plantation aléatoire
            'Sand' => $this->faker->date(), // Génère une date de récolte prévue aléatoire

        ];
    }
}
