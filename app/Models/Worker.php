<?php

namespace App\Models;

use App\Models\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory, HasFilter;

    protected $table = 'workers';
    protected $guarded = false;

    public function position(){
      return  $this->belongsTo(Position::class);
    }

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
