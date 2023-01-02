<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Apprentice;
class ApprenticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "firstName" => $this->faker->firstName(),
            "lastName" => $this->faker->lastName(),
            "email" => $this->faker->unique()->safeEmail(),
            "phoneNumber" => $this->faker->phoneNumber(),
            "address" => $this->faker->streetAddress(),
            "imageURL" => $this->faker->imageURL(),
        ];
    }
}
