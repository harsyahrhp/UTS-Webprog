<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;
use Database\Seeders\BooksSeeder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $book = books::all();
        $categorie = categories::all();

        return view('Home', compact('book'), compact('categorie'));
    }
}
