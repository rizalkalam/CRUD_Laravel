<?php

use App\Models\Book;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AboutController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/book', [BookController::class, 'index']);
Route::get('/detail_book/{id}', [BookController::class, 'show']);

Route::get('/publisher', function () {
    return view('publisher');
});
// Route::get('/about', function () {
//     return view('about');
// });