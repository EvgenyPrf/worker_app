<?php

namespace App\Http\Filters\Var2\Worker;

use Illuminate\Database\Eloquent\Builder;

class AgeTo extends AbstractFilter
{

    public function applyFilter(Builder $builder): void
    {
        $builder->where('age', '<', request('age_to'));
    }
}
