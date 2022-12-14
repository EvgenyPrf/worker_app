<?php

namespace App\Console\Commands;

use App\Jobs\SomeJob;
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
        SomeJob::dispatch()->onQueue('myFirstJob');
    }


}

