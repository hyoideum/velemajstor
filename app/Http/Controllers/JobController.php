<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
       return Job::all();
    }

    public function search(Request $request) {
        $category = $request['category'];
        $location = $request['location'];

        $job = Job::where('category_id', $category)->where('location_id', $location)->get();

        return $job;
    }

    public function show($id) {
        $job = Job::find($id);

        return $job;
    }
}
