<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class User extends Controller
{
    public function profile()
    {
        $userIsLogin = true;
        if ($userIsLogin == true){
            return view('profile');
        } else
        {
            echo '<script language="javascript">';
            echo 'alert("You must sign in")';  
            echo '</script>';
            Route::redirect('/profile', '/');
                
        }
        
    }

    public function insert()
    {
        return view('form');
    }

    public function insertar(Request $request)
    {
        $image = $request->all();

        $imageModel = new Image($image);

        $imageModel -> name =$image['name'];
        $imageModel -> url =$image['url'];
        
        $imageModel -> save();

        return redirect('/');
        // dd($request->all());
    }

}