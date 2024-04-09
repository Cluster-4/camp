<?php

namespace App\Http\Controllers;

use App\Models\booking_information_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Booking_info_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate input if needed
        // dd($request);
        $bookingInfo = new booking_information_model();
        $bookingInfo->bkg_fname = $request->input('f_name');
        $bookingInfo->bkg_lname = $request->input('l_name');
        $bookingInfo->bkg_tel = $request->input('phone');
        // set other properties as needed
        $bookingInfo->save();   

        // redirect or return response as needed
        return redirect('/tracking')->with('success', 'Booking information saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
