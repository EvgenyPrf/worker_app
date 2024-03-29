<?php

namespace App\Http\Filters\Var2\Worker;

use Illuminate\Database\Eloquent\Builder;

class Email extends AbstractFilter
{
    public function applyFilter(Builder $builder): void
    {
        $value = request('email');
        $builder->where('email', 'like', "%{$value}%");
    }
}
