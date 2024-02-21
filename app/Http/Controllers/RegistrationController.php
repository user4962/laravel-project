<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'gender' => 'required',
            'nationality' => 'required|max:255',
            'organization' => 'required|max:255',
            'position' => 'required|max:255',
            'birthdate' => 'required|date',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User;
        $user->fill($validatedData);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');
    }
}
