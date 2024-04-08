<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Account_controller extends Controller
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
        //สร้างบัญชี
        $username = $request->input('acc_username');
        $fname = $request->input('acc_fname');
        $lname = $request->input('acc_lname');
        $position = $request->input('acc_position');
        $email = $request->input('acc_email');
        $password = $request->input('acc_password');
        $tel = $request->input('acc_tel');
        $status = $request->input('acc_status');

        $user = new Account();
        $user->acc_username = $username;
        $user->acc_fname = $fname;
        $user->acc_lname = $lname;
        $user->acc_position = $position;
        $user->acc_email = $email;
        $user->acc_password = $password;
        $user->acc_tel = $tel;
        $user->acc_status = $status;
        if ($request->hasFile('acc_pic_path')) {
            $user->avatar = $request->file('acc_pic_path')->store('public/user_img');
        }
        $user->save();
        return Redirect::to('/');
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
