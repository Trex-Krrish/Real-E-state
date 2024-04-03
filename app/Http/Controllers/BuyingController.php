<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyingController extends Controller
{
    function index(){
        return view('buyingSection.index');
    }
}
