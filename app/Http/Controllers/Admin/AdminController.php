<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->back()->with('success','Information Updated');
    }

}
