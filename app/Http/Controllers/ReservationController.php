<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $allData = Reservation::all();

        return view('backend.dashboard.order', compact('allData'));


    }
    public function create()
    {


        return view('backend.dashboard.order');


    }
    public function store(Request $request)
    {

        $data = new Reservation;
        $data->name = $request->name;
        $data->person = $request->person;
        $data->date = $request->date;
        $data->contact = $request->contact;

        $data->save();
        return redirect()->back()->with('success', 'Reservation successfully');


    }
    public function destroy($id){
        $data = Reservation::find($id);


        if ($data) {
            $data->delete();
            return redirect()->route('order.index')->with('success', 'Data Deleted Successfully');
        } else {

            return redirect()->route('order.index')->with('error', 'Data not found');
        }
        }
}




