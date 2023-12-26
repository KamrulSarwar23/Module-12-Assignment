<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyTicketController extends Controller
{
    public function loginPage()
    {

        return view('home.login');
    }

    public function homePage()
    {
        $trip = Trip::get();
        return view('home.home', compact('trip'));
    }

    public function buyTicket(Request $request)
    {
        $request->validate([
            'from' => ['required'],
            'to' => ['required'],
            'date' => ['required'],
            'seat' => ['required'],
        ]);

        $trip = new Trip();
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->date = $request->date;
        $trip->seat = $request->seat;
        $trip->save();
        toastr()->success('Succesfully Buy a Ticket');
        return redirect()->back();
    }
}
