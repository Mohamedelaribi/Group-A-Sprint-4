<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Apprentice;
use App\Models\Groupe;
use App\Models\ApprenticeGroupe;
class ApprenticeGroupeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $apprentice = Apprentice::all()->pluck('id')->toArray();
        $groupe = Groupe::all()->pluck('id')->toArray();
        return [
            'apprentice_id' =>$this->faker->randomElement($apprentice),
            'groupe_id' => $this->faker->randomElement($groupe),
        ];
    }
}
