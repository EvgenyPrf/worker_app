<?php

namespace App\Console\Commands;


use App\Http\Filters\Var2\Worker\Age;
use App\Http\Filters\Var2\Worker\AgeFrom;
use App\Http\Filters\Var2\Worker\AgeTo;
use App\Http\Filters\Var2\Worker\Name;
use App\Models\Worker;
use Illuminate\Console\Command;
use Illuminate\Pipeline\Pipeline;

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
        request()->merge([
            'name' => 'Michaela McGlynn',
            'age_from' => 34,
            'age_to' => 36,
        ]);
        $workers = app()->make(Pipeline::class)
            ->send(Worker::query())
            ->through([
                Age::class,
                Name::class,
                AgeFrom::class,
                AgeTo::class,
            ])
            ->thenReturn();
        dd($workers->get());

    }


}

