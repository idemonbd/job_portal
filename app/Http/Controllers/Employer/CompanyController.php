<?php

namespace App\Http\Controllers\Employer;

use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CompanyController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        // $jobs = Job::all();
        // return view('front.job.index', compact('categories','jobs'));
    }

    public function create()
    {
        return view('employer.company.create');
    }

    public function store(Request $request)
    {
       //
    }

    public function show(Job $job)
    {
        // $jobs = Category::find($job->category->id)->jobs->skip($job->id);
        // return view('front.job.show', compact('job', 'jobs'));
    }

    public function edit(Job $job)
    {
        return view('employer.company.edit');
    }

    public function update(Request $request, Job $job)
    {
        //
    }

    public function destroy(Job $job)
    {
        //
    }
}
