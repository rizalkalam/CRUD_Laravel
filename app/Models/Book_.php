<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book 
{
    private static $book= [ [
            "id"=>1,
            "nama"=>"kisahku",
            "publisher"=>"kalam",
            "harga"=>15000
        ],
        
        [
            "id"=>2,
            "nama"=>"kisahmu",
            "publisher"=>"gavra",
            "harga"=>12000
        ],
        [
            "id"=>3,
            "nama"=>"kisahkita",
            "publisher"=>"firdan",
            "harga"=>11000
        ],
        [
            "id"=>4,
            "nama"=>"kisahdia",
            "publisher"=>"wahyu",
            "harga"=>10000
        ],
        [
            "id"=>5,
            "nama"=>"kisahitu",
            "publisher"=>"zumar",
            "harga"=>9000
        ],
    ];

    public static function all()
    {
        return collect(self::$book);
    }

    public static function find($id)
    {
        $book_data = static::all();
        return $book_data->firstWhere('id', $id);
    }
}

