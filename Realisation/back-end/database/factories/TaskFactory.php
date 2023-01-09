<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
use App\Models\Brief;
class TaskFactory extends Factory
{

    public function definition()
    {
        $brief = Brief::all()->pluck('id')->toArray();
        return [
            'name' =>$this->faker->name(),
            'description' =>$this->faker->text(),          
            'brief_id' =>$this->faker->randomElement($brief),
            'duration' =>$this->faker->randomNumber(1),
  
        ];
    }
}
