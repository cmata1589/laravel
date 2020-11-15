<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
