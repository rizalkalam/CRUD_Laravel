<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class BookController extends Controller
{
    public function index()
    {
        return view('book.all',[
            'books'=>Book::all()
        ]);
    }

    public function show(Book $book)
    {
        return view('book.detail', [
            'book'=>$book
        ]);    
        
    }
}
