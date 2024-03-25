<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        auth()->login($user);

        return redirect()->route('home')->with('success', 'User registered successfully');
    }

    function authenticate(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'User logged in successfully');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('home')->with('success', 'User logged out successfully');
    }
}
