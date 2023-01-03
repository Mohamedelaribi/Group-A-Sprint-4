<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Tutor;

class TutorFactory extends Factory
{

    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'imageUrl' => $this->faker->imageUrl(true, 'faker',true),
        ];
    }
}
