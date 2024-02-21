<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = User::all();
        return view('participants', ['participants' => $participants]);
    }

    public function edit($id)
    {
        $participant = User::findOrFail($id);
        return view('edit', ['participant' => $participant]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'gender' => 'required',
            'nationality' => 'required|max:255',
            'organization' => 'required|max:255',
            'position' => 'required|max:255',
            'birthdate' => 'required|date',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $participant = User::findOrFail($id);
        $participant->fill($validatedData);
        $participant->save();

        return redirect('/participants');
    }
}
