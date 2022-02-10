<?php

namespace App\Http\Controllers;

use App\Models\Coming;
use Illuminate\Http\Request;

class ComingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coming = Coming::all();
        return view('layouts.coming.index',compact('coming'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coming  $coming
     * @return \Illuminate\Http\Response
     */
    public function show(Coming $coming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coming  $coming
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coming = Coming::findorfail($id);
        return view ('layouts.coming.edit',compact('coming'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coming  $coming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coming = Coming::findorFail($request->id);

        try {
            $coming->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            session()->flash('Edit','Updated Successfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coming  $coming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coming $coming)
    {
        //
    }
}
