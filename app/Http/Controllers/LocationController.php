<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class LocationController extends Controller
{
     public function index()
    {
        $location = Location::orderBy('created_at', 'DESC')->get();
        return view('admin.location.index', compact('location'));
    }

    public function create()
    {
        return view('admin.location.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        $location = new Location();
        $location->name = $request->name;
        $location->save();
        toastr()->success('Created Successfully');
        return redirect()->route('location.index');
    }


    public function edit(string $id)
    {
        $location = Location::findOrFail($id);
        return view('admin.location.edit', compact('location'));
    }

    public function update(string $id, Request $request)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        $location = Location::findOrFail($id);
        $location->name = $request->name;
        $location->save();
        toastr()->success('Updated Successfully');
        return redirect()->route('location.index');
    }

    public function destroy(string $id)
    {
        $location = Location::findOrFail($id)->delete();
        return response(['status' => 'success', 'message' => 'Successfully Deleted']);
    }
}
