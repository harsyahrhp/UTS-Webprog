<?php

use App\Http\Controllers\BookdetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CatergoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/nav', function () {
    return view('Navbar');
});


Route::get('/', [HomeController::class, 'index']);

Route::get('/Bookdetail/{id}', [BookdetailController::class, 'bookdetail', 'index']);

Route::get('/Publisherdetail', [PublisherController::class, 'index']);

Route::get('/Catergory/{id}', [CatergoryController::class,'index' ]);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/categorie', [CatergoryController::class, 'index']);
