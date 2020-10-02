<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $jobs = Job::all();
        return view('front.homepage', compact('categories','jobs'));
    }

    public function employer()
    {
        return view('employer.company.create');
    }

    public function seeker()
    {
        return view('seeker.resume.create');
    }
}
