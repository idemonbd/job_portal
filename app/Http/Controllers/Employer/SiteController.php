<?php

namespace App\Http\Controllers\Employer;

use App\Category;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('employer.job.create',compact('categories'));
    }
}
