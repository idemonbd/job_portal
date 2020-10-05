<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
      public function create()
    {
        return view('employer.company.create');
    }

    public function store(Request $request)
    {
       
    }

    public function show()
    {
        
    }

    public function edit()
    {
        $user = Auth::user();
        return view('employer.company.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->back()->with('success', 'Information updated successfully');
    }

}
