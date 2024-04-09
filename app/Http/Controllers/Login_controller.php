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
    function dashboard_view(){
        return view('dashboard');
    }
    public function viewEditRoom(){
        return view('edit_room');
    }

    function login_process(Request $request){
        $credentials = [
            'acc_username'=>$request->acc_username,
            'acc_password'=>$request->acc_password,
        ];
        if(Auth::attempt($credentials)) {
            return redirect('edit_room');
        }
        return redirect()->route('home')->with('error','Email or password invalid.');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
    //     $req->validate([
    //     'username' => 'required',
    //     'password' => 'required',
    //     ]);

    //     $data = $req->all();

    //     if(
    //         Auth::attempt(['username' => $data['acc_username'], 'password' => $data['acc_password']])){

    //             if($data['acc_position'] == 'เจ้าหน้าที่'){
    //             return Redirect::to('dashboard');//ไปหน้าหลักของเจ้าหน้าที่
    //         }
    //         else if($data['acc_position'] == 'ผู้ดูแลห้องประชุม'){
    //             return Redirect::to('titles');//ไปหน้าหลักของผู้ดูแลห้องประชุม
    //         }
    //         else if($data['acc_position'] == 'ผู้ดูแลระบบ'){
    //             return Redirect::to('titles');//ไปหน้าหลักของผู้ดูแลระบบ
    //         }
    //     }else{
    //         return Redirect::to('login');
    //     }
    // }

    function logout_process(){
        Auth::logout();
        return Redirect::to('login');
    }
}
