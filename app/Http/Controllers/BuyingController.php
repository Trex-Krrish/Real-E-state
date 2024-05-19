<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class BuyingController extends Controller
{
    function index(Request $request)
    {
        $user = auth()->user();
        $zipcode = $user->zip;

        $saleType = $request->input('sale', 'sale');
        $properties = House::where('zip', $zipcode)->where('selling_type', $saleType)->get();

        return view('buyingSection.index', compact('zipcode', 'properties', 'saleType'));
    }

    function search(Request $request)
    {
        $zipcode = $request->zipcode;
        $properties = House::where('zip', $zipcode)->get();

        return view('buyingSection.index', compact('zipcode', 'properties'));
    }
}
