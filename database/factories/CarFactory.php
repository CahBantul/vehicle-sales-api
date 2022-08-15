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
        $isSoldOut = $this->faker->boolean();
        $sold_at = null;

        if($isSoldOut) {
            $sold_at = date("Y-m-d H:i:s");
        }
        
        return [
            'year' => $this->faker->numberBetween(1995, 2022),
            'price' => $this->faker->numberBetween(40000000, 1000000000),
            'color' => $this->faker->safeColorName(),
            'isSoldOut' => $isSoldOut,
            'sold_at' => $sold_at,
            'engine' => $this->faker->randomElement(['Internal Combustion Engine', 'External Combustion Engine']),
            'capacity' => $this->faker->numberBetween(4, 8),
            'type' => $this->faker->randomElement(['Sedan', 'Hatchback', 'MPV', 'SUV', 'Station Wagon', 'Jeep']),
        ];
    }
}