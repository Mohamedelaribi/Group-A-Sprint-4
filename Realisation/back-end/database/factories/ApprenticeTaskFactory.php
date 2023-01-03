<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\apprentice;
use App\Models\task;
use apprenticeTask;
class ApprenticeTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $apprentice = Apprentice::all()->pluck('id')->toArray();
        $task = Task::all()->pluck('id')->toArray();
        return [
            'apprentice_id'=>$this->faker->randomElement($apprentice),
            'task_id'=>$this->faker->randomElement($task),
            'state' =>$this->faker->randomElement(['NULL','1','0']),
            'startDate'=>$this->faker->date(),
            'endDate'=>$this->faker->date(),
        ];
    }
}
