<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    use HasFactory;
    protected $table = 'publisher';
    public function books(){
        return $this->hasMany('App\Models\books', 'publisher_id');
    }

}
