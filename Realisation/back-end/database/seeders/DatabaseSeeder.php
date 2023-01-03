<?php

namespace Database\Seeders;
use App\Models\TrainingYear;
use App\Models\Apprentice;
use App\Models\Brief;
use App\Models\Task;
use App\Models\Groupe;
use App\Models\Tutor;
use App\Models\ApprenticeTask;
use App\Models\ApprenticeBrief;
use App\Models\ApprenticeGroupe;
use Database\Factory\TrainingYearFactory;
use Database\Factory\BriefFactory;
use Database\Factory\TutorFactory;
use Database\Factory\GroupeFactory;
use Database\Factory\TaskFactory;
use Database\Factory\ApprenticeTaskFactory;
use Database\Factory\ApprenticeGroupeFactory;
use Database\Factory\ApprenticeBriefFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        TrainingYear::factory(1)->create();
        Apprentice::factory(20)->create();
        Brief::factory(10)->create();
        Tutor::factory(2)->create();
        Groupe::factory(5)->create();
        Task::factory(10)->create();
        ApprenticeTask::factory(20)->create();
        ApprenticeGroupe::factory(3)->create();
        ApprenticeBrief::factory(4)->create();

    }
}
