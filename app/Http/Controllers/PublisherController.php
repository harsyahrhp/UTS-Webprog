<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;
use App\Models\publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        // $books = books::all();
        $categorie = categories::all();
        $publisher = publisher::all();


        // return view('Publisherdetail', compact('book'), compact('categorie'), compact('publisher'));
        // return var_dump($publisher);
        return view('Publisherdetail', compact('publisher'),compact('categorie'));
    }
}
