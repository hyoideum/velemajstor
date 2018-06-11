<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        //$this->middleware('role:admin');
    }

    public function show_new_jobs() {
        $jobs = Job::where('approved', '=', false)->get();

        return view('jobs', compact('jobs'));
    }

    public function approve_job($id) {
        $job = Job::find($id);

        $job->approved = true;

        $job->save();

        return redirect()->back();
    }

    public function categories() {
        $categories = Category::all();

        return view('admin/categories', compact('categories'));
    }

    public function new_category() {
        return view('admin/new_category');
    }

    public function add_category(Request $request) {
        Category::create([
            'name' => $request['name']
        ]);

        return redirect()->route('categories')->with('message', 'Nova kategorija je uspješno dodana');
    }

    public function users() {
        $users = User::all();

        return view('admin/users', compact('users'));
    }

    public function deactivate_user($id) {
        $user = User::find($id);

        if($user->active) {
            $user->active = false;
            $user->save();
            return redirect()->back()->with('message', 'Korisnik je uspješno deaktiviran');
        } else {
            $user->active = true;
            $user->save();
            return redirect()->back()->with('message', 'Korisnik je uspješno aktiviran');
        }
    }
}
