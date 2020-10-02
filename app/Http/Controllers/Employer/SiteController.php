<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('employer.job.post');
    }
}
