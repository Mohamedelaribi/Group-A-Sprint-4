<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Groupe;
use App\Models\TrainingYear;
use App\Models\Tutor;
class groupeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $trainingYear = TrainingYear::all()->pluck('id')->toArray();
        $tutor = Tutor::all()->pluck('id')->toArray();
        return [
            'name' =>$this->faker->name(),
            'logo' =>$this->faker->imageURL(true, 'Faker',true),
            'trainingyears_id' =>$this->faker->rendomElement($trainingYear),
            'tutor_id' =>$this->faker->randomElement($tutor),

        ];
    }
}
