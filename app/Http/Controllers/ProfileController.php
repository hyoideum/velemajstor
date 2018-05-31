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

        return $user;
    }

    public function edit_profile() {
        $user = User::find(Auth::user()->id);

        return view('edit_profile', compact('user'));
    }

    public function update_profile() {
        $user = User::find(Auth::user()->id);

        $user->name = request('name');
        $user->phone = request('phone');

        $user->save();
    }

    public function delete_profile() {
        User::find(Auth::user()->id)->delete();
    }
}
