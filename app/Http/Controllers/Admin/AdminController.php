<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        $count['job'] = Job::count();
        $count['admin'] = User::where('role', 'admin')->count();
        $count['employer'] = User::where('role', 'employer')->count();
        $count['seeker'] = User::where('role', 'seeker')->count();
        return view('admin.dashboard', compact('count'));
    }

    public function profile()
    {
        return view('admin.profile');
    }
    
}
