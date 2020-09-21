<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
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
