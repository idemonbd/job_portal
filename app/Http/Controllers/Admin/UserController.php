<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

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


    public function update(Request $request, User $user)
    {
        if ($request->has('status')) {
           $user->status = $request->status;
           $user->save();
           return redirect()->back()->with('success', 'Status Updated Successfully');
        }
        return redirect()->back()->with('info', 'Something went wrong');
    }

    public function destroy(User $user)
    {
        // $user->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
