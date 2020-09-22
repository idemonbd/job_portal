<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $jobs = Job::all();
        return view('front.homepage', compact('categories','jobs'));
    }
}
