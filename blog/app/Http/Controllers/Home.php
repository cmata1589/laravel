<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class Home extends Controller
{
    public function index()
    {
        $images = Image::all();

        // foreach ($images as $image){

        //     $img = $image->getAttribute ('url');
        //     $name = $image->getAttribute ('name');
        // }
        
        
        return view('welcome', ['images' => $images]);
        
    }
}