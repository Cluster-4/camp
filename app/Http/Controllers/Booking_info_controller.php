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
    public function filter(Request $request){
        $date_in = $request->input('date_in');
        $date_out = $request->input('date_out');
        $time_in = $request->input('time_in');
        $time_out = $request->input('time_out');

        // Create a new instance of the booking_information_model
        $bk_info = new booking_information_model();

        // Set the values from the filter function
        $bk_info->bkg_date_use = $date_in;
        $bk_info->bkg_date_end = $date_out;
        $bk_info->bkg_time_in = $time_in;
        $bk_info->bkg_time_out = $time_out;

        // Save the booking information
        $bk_info->save();

        // Return the booking information model instance
        return $bk_info;
    }

    public function store(Request $request)
    {
        // Call the filter function to get the filtered values
        $bk_info = $this->filter($request);

        // Create a new instance of the booking_information_model
        $bookingInfo = new booking_information_model();

        // Set the values retrieved from the filter function
        $bookingInfo->bkg_date_use = $bk_info->bkg_date_use;
        $bookingInfo->bkg_date_end = $bk_info->bkg_date_end;
        $bookingInfo->bkg_time_in = $bk_info->bkg_time_in;
        $bookingInfo->bkg_time_out = $bk_info->bkg_time_out;

        // Set other properties
        $bookingInfo->bkg_fname = $request->input('f_name');
        $bookingInfo->bkg_lname = $request->input('l_name');
        $bookingInfo->bkg_tel = $request->input('phone');

        // Save the booking information
        $bookingInfo->save();

        // Redirect or return response as needed
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
