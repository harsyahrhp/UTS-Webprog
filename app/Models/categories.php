<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    // protected $fillable = ['name'];

    // public function books(){
    //     return $this->belongsToMany('App\Models\books', 'book_category', 'category_id', 'book_id');
    // }
        protected $table2 = 'book_category';
}
