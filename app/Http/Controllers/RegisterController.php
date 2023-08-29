<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:3|max:255',
            'RepeatPassword' => 'required|same:password',
        ]);

        User::create($validatedData);

        return redirect('/login');
    }
}
