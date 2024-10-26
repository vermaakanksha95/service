<?php

namespace App\Http\Controllers;

use App\Models\Cab;
use Illuminate\Http\Request;

class CabController extends Controller
{
    public function index()
    {
        $cabs = Cab::all();
        return view('admin.manageCabs')->with('cabs', $cabs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'cab_no' => 'required|max:255',
            'cab_seat' => 'required|max:255',
            'cab_type' => 'required|max:255',
            'image' => 'required|max:255',



        ]);
        $cabs = new Cab();
        $cabs->name = $request->name;
        $cabs->cab_no = $request->cab_no;
        $cabs->cab_seat = $request->cab_seat;
        $cabs->cab_type = $request->cab_type;
        $cabs->image = $request->image;
        $cabs->save();

        return redirect()->route('cabs.index')->with('success', 'insart successfully');
    }
}
