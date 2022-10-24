<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Client;
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
        //$this->prepareData();

        $worker = Worker::find(7);
        $position = Position::find(7);
        dd($position->workers->toArray());


        return 0;
    }

    private function prepareData()
    {

        $positionData1 = [
            'title' => 'manager'
        ];

        $position1 = Position::create($positionData1);

        $workersData1 = [
                'name' => 'Masha',
                'surname' => 'Ivanova',
                'age' => '22',
                'email' => 'mi@mail.ru',
                'position_id' => $position1->id,

        ];
        $worker1 = Worker::create($workersData1);


        $positionData2 = [
            'title' => 'boss'
        ];

        $position2 = Position::create($positionData2);

        $workersData2 = [
            'name' => 'Misha',
            'surname' => 'Petrov',
            'age' => '40',
            'email' => 'misha@mail.ru',
            'position_id' => $position2->id,

        ];
        $worker2 = Worker::create($workersData2);


        $positionData3 = [
            'title' => 'developer'
        ];

        $position3 = Position::create($positionData3);

        $workersData3 = [
            'name' => 'Dima',
            'surname' => 'Smirnov',
            'age' => '26',
            'email' => 'smirnov@mail.ru',
            'position_id' => $position3->id,

        ];
        $worker3 = Worker::create($workersData3);


        $workersData4 = [
            'name' => 'Jack',
            'surname' => 'Tiger',
            'age' => '26',
            'email' => 'tiger@mail.ru',
            'position_id' => $position3->id,

        ];
        $worker4 = Worker::create($workersData4);





//        $clientsData = [
//            'name' => 'Petr',
//            'surname' => 'Ivanov',
//            'email' => 'ivanov@gmail.com',
//            'tel_number' => '79998888',
//            'age' => '34',
//            'is_married' => false,
//            'description' => 'some text',
//        ];
//
//        $client = Client::create($clientsData);
//
//        $profileData = [
//            'client_id' => $client->id,
//            'skills' => 'Play basketball',
//            'bio' => 'Ex sportsmen',
//            'finished_study_at' => '2018-06-01',
//        ];
//
//        $profile = Profile::create($profileData);
//
//        dd($profile->id);

    }
}

