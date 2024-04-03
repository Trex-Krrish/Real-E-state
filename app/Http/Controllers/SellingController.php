<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class SellingController extends Controller
{
   function index()
   {
      return view('sellingSection.index');
   }

   function store(Request $request)
   {
      $validatedData = $request->validate([
         'propertyType' => 'required',
         'bedrooms' => 'required|integer',
         'bathrooms' => 'required|integer',
         'yearBuilt' => 'required|integer',
         'propertyDescription' => 'required',
         'streetAddress' => 'required',
         'city' => 'required',
         'state' => 'required',
         'zip' => 'required',
         'listingPrice' => 'required',
         'name' => 'required',
         'email' => 'required|email',
         'phone' => 'nullable',
         'propertyPhotos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each photo individually

         // 'propertyPhotos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each photo individually
      ]);

      // dd($validatedData);
      // Create a new House instance
      $house = new House();

      $house->property_type = $validatedData['propertyType'];
      $house->bedrooms = $validatedData['bedrooms'];
      $house->bathrooms = $validatedData['bathrooms'];
      $house->year_built = $validatedData['yearBuilt'];
      $house->description = $validatedData['propertyDescription'];
      $house->location = $validatedData['streetAddress'];
      $house->city = $validatedData['city'];
      $house->state = $validatedData['state'];
      $house->zip = $validatedData['zip'];
      $house->listing_price = $validatedData['listingPrice'];
      $house->seller_name = $validatedData['name'];
      $house->seller_email = $validatedData['email'];
      $house->seller_phone = $validatedData['phone'];

      $house->save();

      if ($request->hasFile('propertyPhotos')) {
         foreach ($request->file('propertyPhotos') as $photo) {
            $path = $photo->store('house_photos');
            $house->photos()->create([
               'path' => $path,
            ]);
         }

      } else {
         dd('No photos uploaded');
      }

      return redirect()->route('home')->with('success', 'Property listed successfully!');
   }
}
