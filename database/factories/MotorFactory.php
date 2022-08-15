<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MotorFactory extends Factory
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
            'year' => $this->faker->numberBetween(2000, 2022),
            'price' => $this->faker->numberBetween(4000000, 25000000),
            'color' => $this->faker->safeColorName(),
            'isSoldOut' => $isSoldOut,
            'sold_at' => $sold_at,
            'engine' => $this->faker->randomElement(['Carburetion', 'Fuel Injection']),
            'suspension' => $this->faker->randomElement(['Pararel Fork', 'Plunger Rear Suspension', 'Telescopic Fork', 'Telescopic Up Side Down', 'Swing Arm Rear Suspension']),
            'transmission' => $this->faker->randomElement(['Manual', 'Automatic']),
        ];
    }
}