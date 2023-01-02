<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ApprenticeBrief;
use App\Models\Apprentice;
use App\Models\Brief;
class ApprenticeBriefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $brief = Brief::All()->pluck('id')->toArray();
        $Apprentice = Apprentice::All()->pluck('id')->toArray();
        return [
            'apprentice_id' =>$this->faker->randomElement($Apprentice),
            'brief_id' =>$this->faker->randomElement($brief),
            'dateAssignment' =>$this->faker->date(),
        ];
    }
}
