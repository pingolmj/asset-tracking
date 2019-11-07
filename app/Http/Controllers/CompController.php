<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Component;
class CompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = Component::all();
        return view('component.index',compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('component.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'model_number'=> 'required',
            'location'=> 'required',
            'quantity1'=> 'required',
            'category'=> 'required',
        ]);

        \App\Component::create($request->all());
        return redirect('comp');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $components = Component::findOrFail($id);
        return view('component.show',compact('components'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $components = Component::findOrFail($id);
        return view('component.edit',compact('components'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $components = Component::findOrFail($id);
        $components->update($request->all());
        return redirect('comp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $components = Component::findOrFail($id);
        $components->delete();
        return back();
    }
}
