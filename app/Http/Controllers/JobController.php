<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
       return Job::all();
    }

    public function search(Request $request) {
        $category = $request['category'];
        $location = $request['location'];

        $jobs = Job::where('category_id', $category)->where('location_id', $location)->get();

        return view('jobs', compact('jobs'));
    }

    public function show($id) {
        $job = Job::find($id);

        return view('job_details', compact('job'));
    }

    public function show_job_form() {
        $categories = Category::all();
        $locations = Location::all();

        return view('post_job', compact('categories', 'locations'));
    }

    public function create(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);


        Job::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'user_id' => $request['user_id'],
            'category_id' => $request['category'],
            'location_id' => $request['location']
        ]);
    }

    public function edit($id) {
        $job = Job::find($id);

        return view('edit_job', compact('job'));
    }

    public function update($id) {
        $job = Job::find($id);

        $job->title = request('title');
        $job->description = request('description');

        $job->save();

        return redirect()->back();

    }

    public function delete($id) {
        $job = Job::find($id);
        $job->delete();

        return redirect()->back();
    }
}