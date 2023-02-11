<?php

namespace App\Console\Commands;


use App\Http\Filters\Var1\WorkerFilter;
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

    }


}

