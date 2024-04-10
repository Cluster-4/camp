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
        $data["bmrs_accounts"] = Account::all();
        return view('manage_account', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add_account");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //สร้างบัญชี
        $username = $request->input("username");
        $fname = $request->input("fname");
        $lname = $request->input("lname");
        $position = $request->input("position");
        $email = $request->input("email");
        $password = $request->input("password");
        $tel = $request->input("tel");
        $status = $request->input("status");
        $pic = $request->input("pic");


        $AccountModel = new Account();

        $AccountModel->acc_username = $username;
        $AccountModel->acc_fname = $fname;
        $AccountModel->acc_lname = $lname;
        $AccountModel->acc_position = $position;
        $AccountModel->acc_email = $email;
        $AccountModel->acc_password = $password;
        $AccountModel->acc_tel = $tel;
        $AccountModel->acc_status = $status;
        $AccountModel->acc_pic_path = $pic;





        $AccountModel->save();
        return Redirect::to('/manage_account');
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
        $acc_data = Account::find($id);
        $accounts = Account::all();

        if ($acc_data === null) {
            return Redirect::to("/manage_account");
        } else {
            return view("edit_account", compact("acc_data"));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $username = $request->input("username");
        $fname = $request->input("fname");
        $lname = $request->input("lname");
        $position = $request->input("position");
        $email = $request->input("email");
        $password = $request->input("password");
        $tel = $request->input("tel");
        $status = $request->input("status");
        $pic = $request->input("pic");

        $accountModelId = Account::find($id);
        $accountModelId->acc_username = $username;
        $accountModelId->acc_fname = $fname;
        $accountModelId->acc_lname = $lname;
        $accountModelId->acc_position = $position;
        $accountModelId->acc_email = $email;
        $accountModelId->acc_password = $password;
        $accountModelId->acc_tel = $tel;
        $accountModelId->acc_status = $status;
        $accountModelId->save();

        return Redirect::to("/manage_account");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $AccountModelId = Account::find($id);

        $AccountModelId->delete();
        return Redirect::to("/manage_account");
    }

    public function search(Request $request)
    {
        $searchName = $request->input('searchName');
        $searchRole = $request->input('searchRole');

        $query = AccountModel::query();

        if ($searchName) {
            $query->where('acc_fname', 'like', '%' . $searchName . '%');
        }

        if ($searchRole) {
            $query->where('acc_position', $searchRole);
        }

        $data["bmrs_accounts"] = $query->get();
        return view('manage_account', $data);
    }
}
