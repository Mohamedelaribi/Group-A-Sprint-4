<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
use App\Models\Brief;
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $brief = Brief::all()->pluck('id')->toArray();
        return [
            'name' =>$this->faker->name(),
            'description' =>$this->faker->taxt(),
            'duration' =>$this->faker->randomElement(1),
            'brief_id' =>$this->faker->randomElement($brief),
        ];
    }
}
