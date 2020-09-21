<?php

namespace App\Http\Controllers\Admin;

use App\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees = Degree::all();
        return view('admin.degree.index', compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:degrees',
            // 'logo' => 'image'
        ]);

        $degree = $request->all();

        // if ($request->has('logo')) {
        //     $degree['logo'] = $request->logo->store('degree/logo');
        // }

        Degree::create($degree);

        return redirect()->back()->with('success', 'Degree Added Successfully');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit(Degree $degree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        $request->validate([
            'name' => 'required|min:3|unique:degrees',
            // 'logo' => 'image'
        ]);

        $updatedata = $request->all();

        // if ($request->has('logo')) {
        //     $updatedata['logo'] = $request->logo->store('degree/logo');
        // }

        $degree->update($updatedata);

        return redirect()->back()->with('success', 'Degree Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        $degree->delete();
        return redirect()->back()->with('success', 'Degree Deleted Successfully');
    }
}
