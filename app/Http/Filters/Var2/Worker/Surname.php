<?php

namespace App\Http\Filters\Var2\Worker;

use Illuminate\Database\Eloquent\Builder;

class Surname extends AbstractFilter
{
    public function applyFilter(Builder $builder): void
    {
        $value = request('surname');
        $builder->where('surname', 'like', "%{$value}%");
    }
}
