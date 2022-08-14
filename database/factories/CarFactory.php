<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => $this->faker->numberBetween(1995, 2022),
            'price' => $this->faker->numberBetween(40000000, 1000000000),
            'color' => $this->faker->safeColorName(),
            'isSoldOut' => $this->faker->boolean(),
            'engine' => $this->faker->randomElement(['Internal Combustion Engine', 'External Combustion Engine']),
            'capacity' => $this->faker->numberBetween(4, 8),
            'type' => $this->faker->randomElement(['Sedan', 'Hatchback', 'MPV', 'SUV', 'Station Wagon', 'Jeep']),
        ];
    }
}