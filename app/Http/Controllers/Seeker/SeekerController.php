<?php
namespace App\Http\Controllers\Seeker;

use App\Job;
use App\Apply;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SeekerController extends Controller
{

    public function index()
    {
        $user = Auth::user();
       return view('seeker.resume.show',compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
       return view('seeker.resume.edit',compact('user'));
    }

    public function update(Request $request)
    {
        // return $request->all();
        Auth::user()->update($request->all());
       return redirect()->back()->with('success','Information Updated successfully');
    }

    public function applied()
    {
        $applied = Apply::where('user_id', Auth::id())->get()->pluck('job_id');
        $jobs = Job::find($applied);
       return view('seeker.job.index', compact('jobs'));
    }

    public function password(Request $request)
    {
        $request->validate([
            'old' => 'required',
            'password' => 'required|confirmed',
        ]);

        $userpass = Auth::user()->password;
        $oldpass = $request->old;

        if (Hash::check($oldpass, $userpass)) {
            $user = Auth::user();
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('success','Password Updated successfully');
        }
        return redirect()->back()->with('info','Old password isnot correct');
    }

    public function download()
    {
        // return view('seeker.resume.download');
        $user = Auth::user();
        $pdf = PDF::loadView('seeker.resume.download', compact('user'));
        return $pdf->download('Resume.pdf');

    }
}
