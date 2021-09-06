<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContoller extends Controller
{
    // 3. user
    public function index()
    {
        $name = 'ramal'; // nama output ekata dena vidiya
        $users = array (  // array eken data pass kirima
            "name" =>"ramal vhjk",
            "email" =>"ramal@gmail.com",
            "phone" =>"456789"
        );
        return view('user' ,compact('name', 'users'));
    }
}
