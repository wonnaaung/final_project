<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthlayoutController extends Controller
{
    // Authlayout
    function login(){
        return view("auth.login");
    }
    function register(){
        return view("auth.register");
    }
   
}
