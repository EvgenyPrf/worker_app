<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Client;
use App\Models\Project;
use App\Models\ProjectWorker;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $this->prepareData();
        $project = Project::find(3);
        dd($project->workers->toArray());


        return 0;
    }

    private function prepareData()
    {
        $workerManager = Worker::find(5);
        $workerDeveloper1 = Worker::find(7);
        $workerDeveloper2 = Worker::find(8);


        $project1 = Project::create([
            'title' => 'Blog'
        ]);

        $project2 = Project::create([
            'title' => 'Shop'
        ]);

        $project3 = Project::create([
            'title' => 'Game'
        ]);

        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerManager->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDeveloper1->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDeveloper2->id,
        ]);

        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerManager->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerDeveloper1->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerDeveloper2->id,
        ]);

        ProjectWorker::create([
            'project_id' => $project3->id,
            'worker_id' => $workerManager->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project3->id,
            'worker_id' => $workerDeveloper1->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project3->id,
            'worker_id' => $workerDeveloper2->id,
        ]);

    }
}

