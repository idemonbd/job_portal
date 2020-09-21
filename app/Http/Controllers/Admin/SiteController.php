<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\User;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function admin()
    {
        $count['job'] = Job::count();
        $count['admin'] = User::where('role', 'admin')->count();
        $count['employer'] = User::where('role', 'employer')->count();
        $count['seeker'] = User::where('role', 'seeker')->count();
        return view('admin.dashboard', compact('count'));
    }

    public function admin_profile()
    {
        return view('admin.profile');
    }

    public function manage_seeker()
    {
        $users = User::where('role', 'seeker')->paginate(10);
        return view('admin.manage.seeker', compact('users'));
    }

    public function manage_employer()
    {
        $users = User::where('role', 'employer')->paginate(10);
        return view('admin.manage.employer', compact('users'));
    }

    public function manage_admin()
    {
        $users = User::where('role', 'admin')->paginate(10);
        return view('admin.manage.admin', compact('users'));
    }
}
