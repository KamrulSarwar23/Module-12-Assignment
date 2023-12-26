<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Location;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $trip = Trip::orderBy('created_at', 'DESC')->get();
        return view('admin.trip.index', compact('trip'));
    }

    public function create()
    {
        $location = Location::get();
        return view('admin.trip.create', compact('location'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'from' => ['required'],
            'to' => ['required'],
            'date' => ['required'],
            'seat_capacity' => ['required'],
        ]);

        $trip = new Trip();
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->date = $request->date;
        $trip->seat_capacity = $request->seat_capacity;
        $trip->save();
        toastr()->success('Succesfully Create a Trip');
        return redirect()->route('trips.index');
    }

    public function edit(string $id)
    {
        $location = Location::get();
        $trip = Trip::findOrFail($id);
        return view('admin.trip.edit', compact('trip', 'location'));
    }

    public function update(string $id, Request $request)
    {
        $request->validate([
            'from' => ['required'],
            'to' => ['required'],
            'date' => ['required'],
            'seat_capacity' => ['required'],
        ]);

        $trip = Trip::findOrFail($id);
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->date = $request->date;
        $trip->seat_capacity = $request->seat_capacity;
        $trip->save();
        toastr()->success('Succesfully Create a Trip');
        return redirect()->route('trips.index');
    }


    public function destroy(string $id)
    {
        $ticket = Trip::findOrFail($id)->delete();
        return response(['status' => 'success', 'message' => 'Successfully Deleted']);
    }
}
