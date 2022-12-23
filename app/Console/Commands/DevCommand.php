<?php

namespace App\Console\Commands;

use App\Models\Department;
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
    protected $signature = 'develop';

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
        //$this->prepareData();

//        $worker = Worker::find(6);
//
//        dd($worker-> position -> department -> toArray());


        $project = Project::find(1);
        dd($project->workers->toArray());


        return 0;
    }

    private function prepareData()
    {
        $department1 = Department::create([
            'title' => 'IT'
        ]);

        $department2 = Department::create([
            'title' => 'Analytics'
        ]);

        $department3 = Department::create([
            'title' => 'HR'
        ]);

        $position1 = Position::create([
            'title' => 'Developer',
            'department_id' => $department1->id
        ]);

        $position2 = Position::create([
            'title' => 'Analytic',
            'department_id' => $department2->id
        ]);

        $position3 = Position::create([
            'title' => 'Manager',
            'department_id' => $department3->id
        ]);

        $worker1 = Worker::create([
            'name' => 'Galya',
            'surname' => 'Popova',
            'age' => '23',
            'email' => 'galya@mail.ru',
            'position_id' => $position3->id,
        ]);

        $worker2 = Worker::create([
            'name' => 'Sasha',
            'surname' => 'Petrova',
            'age' => '27',
            'email' => 'sasha@mail.ru',
            'position_id' => $position3->id,
        ]);

        $worker3 = Worker::create([
            'name' => 'Petya',
            'surname' => 'Ivanov',
            'age' => '29',
            'email' => 'petya@mail.ru',
            'position_id' => $position1->id,
        ]);

        $worker4 = Worker::create([
            'name' => 'Vasya',
            'surname' => 'Pupkin',
            'age' => '22',
            'email' => 'vasya@mail.ru',
            'position_id' => $position1->id,
        ]);

        $worker5 = Worker::create([
            'name' => 'Sergey',
            'surname' => 'Covrov',
            'age' => '42',
            'email' => 'sergo@mail.ru',
            'position_id' => $position2->id,
        ]);

        $worker6 = Worker::create([
            'name' => 'Elena',
            'surname' => 'Pupkina',
            'age' => '48',
            'email' => 'pupochek@mail.ru',
            'position_id' => $position2->id,
        ]);

    }
}

