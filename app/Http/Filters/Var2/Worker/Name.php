<?php

namespace App\Http\Filters\Var2\Worker;

use Illuminate\Database\Eloquent\Builder;

class Name extends AbstractFilter
{
    public function applyFilter(Builder $builder): void
    {
        $value = request('name');
        $builder->where('name', 'like', "%{$value}%");
    }
}
