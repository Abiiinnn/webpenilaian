<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadALLuser(){
        return view('admin');
        
    }
}
