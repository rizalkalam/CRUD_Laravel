<?php

use App\Models\Book;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PublisherController;

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
Route::get('/detail_book/{book}', [BookController::class, 'show']);

Route::get('/publisher', [PublisherController::class, 'index']);
Route::get('/detail_publisher/{publishers}', [PublisherController::class, 'show']);
// Route::get('/about', function () {
//     return view('about');
// });