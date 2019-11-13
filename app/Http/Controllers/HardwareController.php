<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hardware;

class HardwareController extends Controller
{
    public function index()
    {   

        return view('hardware.hardware');
    }


    public function store(Request $request)
    {
        $hardware = new Hardware();

        $hardware->name = $request->input('name');
        $hardware->description = $request->input('description');
        $hardware->category = $request->input('category');
        $hardware->model_number = $request->input('model_number');
        $hardware->location = $request->input('location');
        $hardware->status = $request->input('status');
                
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/hardware/', $filename);
            $hardware->image = $filename;
        } else {
            return $request;
            $hardware->image = '';
        }

        $hardware->save();


        return redirect('/hardwarepage')->with('hardwares',$hardware);
        
        
    }

    public function display()
    {
        $hardwares = Hardware::paginate(5);
        return view('hardware/hardwareform')->with('hardwares', $hardwares);
    }

    public function edit($id)
    {
        $hardwares = Hardware::find($id);
        return view('hardware/hardwareupdateform')->with('hardwares',$hardwares);
    }

    public function update(Request $request, $id)
    {
        $hardwares = Hardware::find($id);

        $hardwares->name = $request->input('name');
        $hardwares->description = $request->input('description');
        $hardwares->category = $request->input('category');
        $hardwares->model_number = $request->input('model_number');
        $hardwares->location = $request->input('location');
        $hardwares->status = $request->input('status');
        
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/hardware/', $filename);
            $hardwares->image = $filename;
        }

        $hardwares->save();

        return redirect('/hardwarepage')->with('hardwares',$hardwares);

    }


    public function delete($id)
    {
        $hardwares = Hardware::find($id);
        $hardwares->delete();

        return redirect('/hardwarepage')->with('hardwares',$hardwares);
    }


}
