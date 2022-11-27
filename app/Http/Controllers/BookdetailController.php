<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;
use Illuminate\Http\Request;

class BookdetailController extends Controller
{
    public function index(){
        $book = books::all();
        $categorie = categories::all();

        return view('Bookdetail', compact('book'), compact('categorie'));
    }

    public function bookdetail($id){
        $bookdetail = books::all()->where('id',$id);
        $categorie = categories::all();
        return view('bookdetail', compact('bookdetail'),compact('categorie') );
    }
}
