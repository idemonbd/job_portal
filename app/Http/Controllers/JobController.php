<?php

namespace App\Http\Controllers;

use App\Apply;
use App\Job;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $jobs = Job::all();
        return view('front.job.index', compact('categories','jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $applied = [];
        if (Auth::check()) {
           $applied = Apply::where(['job_id' => $job->id, 'user_id' => Auth::id()])->first();
        }
        $jobs = Category::find($job->category->id)->jobs->skip($job->id);
        return view('front.job.show', compact('job', 'jobs','applied'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }


    public function search(Request $request)
    {
        $jobs = Job::where('category_id', $request->cat)->where('title','LIKE',"%{$request->q}%")->orWhere('description','LIKE',"%{$request->q}%")->get();
        $categories = Category::all();
        return view('front.job.index', compact('categories','jobs'));
    }
}
