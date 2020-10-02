<?php
namespace App\Http\Controllers\Seeker;

use App\Apply;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Facades\Auth;

class SeekerController extends Controller
{

    public function index()
    {
       return view('seeker.resume.show');
    }

    public function edit()
    {
       return view('seeker.resume.edit');
    }

    public function applied()
    {
        $applied = Apply::where('user_id', Auth::id())->get()->pluck('job_id');
       return $jobs = Job::find($applied);
       return view('seeker.resume.edit', compact('jobs'));
    }

    public function download()
    {
       return view('seeker.resume.show');
    }
}
