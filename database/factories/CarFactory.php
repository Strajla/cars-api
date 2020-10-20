<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            "brand" => $this->faker->word('10'),
            "model" => $this->faker->word('5'),
            "year" => $this->faker->numberBetween(2010, 2020),
            "maxSpeed" => $this->faker->numberBetween(1, 210),
            "isAutomatic" => $this->faker->boolean(),
            "engine" => $this->faker->word('8'),
            "numberOfDoors" =>$this->faker->numberBetween(3, 5)

        ];
    }
}

