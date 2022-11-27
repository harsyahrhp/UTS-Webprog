<?php

namespace App\Http\Controllers;

use App\Models\book_category;
use App\Models\books;
use App\Models\categories;
use Illuminate\Http\Request;

class CatergoryController extends Controller
{

    public function index($id){
        $book = books::all();
        $book_categorys = book_category::all();
        // $book_category_contol = book_category::all()->where('id', $id);
        $categorie = categories::all();

        return view('Catergory', compact('book'), compact('categorie'),compact('book_categorys'));
    }
}
