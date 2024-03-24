<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index (){
        return view('home.index');
    }

    function login(){
        return view('auth.login.index');
    }

    function register(){
        return view('auth.register.index');
    }
}
