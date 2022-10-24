<?php

namespace App\Models;

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
}
