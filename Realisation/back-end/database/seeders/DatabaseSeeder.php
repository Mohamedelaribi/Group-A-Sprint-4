<?php

namespace Database\Seeders;
use App\Models\TrainingYear;
use Database\Factory\TrainingYearFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        TrainingYear::factory(1)->create();
    }
}
