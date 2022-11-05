<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublisherController extends Controller
{
    public function index()
    {
        return view('publisher',[
            'publishers'=>Publisher::all()
        ]);
    }

    public function show(Publisher $publishers)
    {
        return view('detail_publisher', [
            'publisher'=>$publishers
        ]);    
        
    }
}
