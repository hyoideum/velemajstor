<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin');
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
}
