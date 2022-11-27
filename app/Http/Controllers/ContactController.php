<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $categorie = categories::all();

        return view('contact', compact('categorie'));
    }
}
