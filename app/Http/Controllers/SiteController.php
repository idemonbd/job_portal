<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $jobs = Job::all();
        return view('front.homepage', compact('categories', 'jobs'));
    }

    public function employer()
    {
        return view('employer.company.create');
    }

    public function emReg(Request $request)
    {
        // return $request;
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        event(new Registered(
            $user = User::create([
                // required
                'name' => $request->company_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

                'role' => 'employer',

                'company_name' => $request->company_name,
                'company_email' => $request->company_email,
                'company_mobile' => $request->company_mobile,
                'company_address' => $request->company_address,
                'company_twitter' => $request->company_twitter,
                'company_facebook' => $request->company_facebook,

            ])
        ));

        Auth::login($user);
        return redirect('employer')->with('success', 'Registration succefull. Now verify your email');
    }


    public function seeker()
    {
        return view('seeker.resume.create');
    }

    public function seekReg(Request $request)
    {
    //    return $request;
       $request->validate([
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $data = $request->all();
    if ($request->has('picture')) {
        $data['picture'] = $request->picture->store('/avater');
    }
    $data['password'] = Hash::make($request->password);
    $data['role'] = 'seeker';


    event(new Registered(
        $user = User::create($data)
    ));

        Auth::login($user);
        return redirect('seeker')->with('success', 'Registration succefull. Now verify your email');
    }
}
