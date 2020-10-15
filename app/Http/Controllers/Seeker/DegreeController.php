<?php

namespace App\Http\Controllers\Seeker;

use App\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DegreeController extends Controller
{

    public function store(Request $request)
    {
        $degree = $request->all();
        $degree['user_id'] = Auth::id();
        Degree::create($degree);
        return redirect()->back()->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show(Degree $degree)
    {
        //
    }


    public function update(Request $request, Degree $degree)
    {


        $degree->update($request->all());

        return redirect()->back()->with('success', 'Updated Successfully');
    }


    public function destroy(Degree $degree)
    {
        $degree->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
