<?php

namespace Database\Factories;
use App\Models\Brief;
use App\Models\Tutor;

use Illuminate\Database\Eloquent\Factories\Factory;


class BriefFactory extends Factory
{

    public function definition()
    {
        $tutor = Tutor::all()->pluck('id')->toArray();
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->text(),
            "duration" => $this->faker->randomNumber(1),
            "tutor_id" => $this->faker->randomElement($tutor),
        ];
    }
}
