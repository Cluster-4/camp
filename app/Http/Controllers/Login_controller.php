<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class Login_controller extends Controller
{
    function login_view(){
        return view('login');
    }

    function login_process(Request $req){
        $req->validate([
        'username' => 'required',
        'password' => 'required',
        ]);

        $data = $req->all();
        // use Illuminate\Support\Facades\Auth;
        if(Auth::attempt(['username' => $data['username'], 'password' => $data['password']])){
            if($data['acc_position'] == 'เจ้าหน้าที่'){
                return Redirect::to('titles');//ไปหน้าหลักของเจ้าหน้าที่
            }
            else if($data['acc_position'] == 'ผู้ดูแลห้องประชุม'){
                return Redirect::to('titles');//ไปหน้าหลักของผู้ดูแลห้องประชุม
            }
            else if($data['acc_position'] == 'ผู้ดูแลระบบ'){
                return Redirect::to('titles');//ไปหน้าหลักของผู้ดูแลระบบ
            }
        }else{
            return Redirect::to('login');
        }
    }

    function logout_process(){
        Auth::logout();
        return Redirect::to('login');
    }
}
