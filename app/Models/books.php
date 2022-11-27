<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['title', 'author', 'year', 'synopsis', 'image'];
    public function publisher(){
        return $this->belongsTo('app\Models\publisher', 'publisher_id');
    }

    public function categories(){
        return $this->belongsTo('App\Models\categories', 'categories_id');
    }
}
