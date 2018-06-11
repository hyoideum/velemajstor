<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile() {
        $id = Auth::user()->id;

        $user = User::find($id);

        return view('profile', compact('user'));
    }

    public function edit_profile() {
        $user = User::find(Auth::user()->id);

        return view('edit_profile', compact('user'));
    }

    public function update_profile(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|regex:/(\+)[0-9]{11}/',
            'role' =>'required'
        ]);

        $user = User::find(Auth::user()->id);

        $user->name = request('name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->role = \request('role');

        $user->save();
    }

    public function delete_profile() {
        User::find(Auth::user()->id)->delete();
    }
}
