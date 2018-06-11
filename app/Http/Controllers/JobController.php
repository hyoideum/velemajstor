<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(){
        if(!Auth::user()->hasRole('admin')) {
            $jobs = Job::where('approved', '=', true)->get();
        } else {
            $jobs = Job::all();
        }

       return view('jobs', compact('jobs'));
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

    public function my_jobs($id) {
        $jobs = Job::where('user_id', '=', $id)->get();

        return view('my_jobs', compact('jobs'));
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

        return redirect()->route('my_jobs', ['id' => $request['user_id']]);
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

        return redirect()->home();
    }
}