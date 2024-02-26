<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WeatherData>
 */
class WeatherDataFactory extends Factory
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
            'date' => $this->faker->date(),
            'temperature' => $this->faker->randomFloat(2, -10, 40), // Temperature between -10 and 40 degrees Celsius
            'humidity' => $this->faker->randomFloat(2, 0, 100), // Humidity between 0% and 100%
            'precipitation' => $this->faker->randomFloat(2, 0, 50), // Precipitation between 0mm and 50mm
            'wind_speed' => $this->faker->randomFloat(2, 0, 30), // Wind speed between 0 and 30 km/h
     
        ];
    }
}
