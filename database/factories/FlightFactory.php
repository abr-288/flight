<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'origin' => $this->faker->city,
            'destination' => $this->faker->city,
            'departure' => $this->faker->dateTimeBetween('now', '+1 year'),
            'arrival' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
        ];
    }
}