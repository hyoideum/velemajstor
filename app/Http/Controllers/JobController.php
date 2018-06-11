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
        $jobs = Job::where('approved', '=', true)->get();

        if(!Auth::user() == null) {
            if (Auth::user()->hasRole('admin')) {
                $jobs = Job::all();
            }
        }

       return view('jobs', compact('jobs'));
    }

    public function search(Request $request) {
        $category = $request['category'];
        $location = $request['location'];

        $jobs = Job::where('category_id', $category)->where('location_id', $location)->where('approved', true)->get();

        return view('jobs', compact('jobs'));
    }

    public function show($id) {
        $job = Job::find($id);

        if($job->approved || $job->user_id == Auth::user()->id) {
            return view('job_details', compact('job'));
        }
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
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'number' => 'required'
        ]);

        Job::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'user_id' => $request['user_id'],
            'category_id' => $request['category'],
            'location_id' => $request['location'],
            'number' => $request['number']
        ]);

        return redirect()->route('my_jobs', ['id' => $request['user_id']])->with('message', 'Posao je uspješno postavljen');
    }

    public function edit($id) {
        $job = Job::find($id);
        $categories = Category::all();
        $locations = Location::all();

        return view('edit_job', compact('job', 'categories', 'locations'));
    }

    public function update($id, Request $request) {
        $job = Job::find($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'number' => 'required'
        ]);

        $job->title = $request['title'];
        $job->description = $request['description'];
        $job->category_id = $request['category'];
        $job->location_id = $request['location'];
        $job->number = $request['number'];
        $job->approved = false;

        $job->save();

        return redirect()->route('my_jobs', ['id' => Auth::user()->id])->with('message', 'Vaš posao je uspješno uređen');

    }

    public function delete($id) {
        $job = Job::find($id);
        $job->delete();

        return redirect()->back()->with('message', 'Posao je uspješno obrisan');
    }
}