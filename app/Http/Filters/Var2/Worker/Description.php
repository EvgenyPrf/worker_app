<?php

namespace App\Http\Filters\Var2\Worker;

use Illuminate\Database\Eloquent\Builder;

class Description extends AbstractFilter
{
    public function applyFilter(Builder $builder): void
    {
        $value = request('description');
        $builder->where('description', 'like', "%{$value}%");
    }
}
