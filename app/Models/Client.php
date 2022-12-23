<?php

namespace App\Models;

use App\Events\Client\CreatedEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $guarded = false;

    public function profile(){
        return $this->hasOne(Profile::class, 'client_id', 'id');
    }

    protected static function booted()
    {
        static::created(function ($model){
            event(new CreatedEvent($model));
        });
    }
}
