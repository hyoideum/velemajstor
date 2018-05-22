<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        $categories = Category::all();

        return view('index', compact('locations', 'categories'));
    }

    public function home()
    {
        return view('home');
    }
}
