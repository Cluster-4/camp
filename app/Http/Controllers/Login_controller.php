<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class Login_controller extends Controller
{
    function login_view()
    {
        return view('login');
    }
    function dashboard_view()
    {
        return view('dashboard');

    }
    public function viewEditRoom()
    {
        return view('edit_room');
    }
    public function viewManage_Room()
    {
        return view('manage_room');
    }
    public function viewHome()
    {
        return view('manage_room');
    }
    public function viewHome_officer()
    {
        return view('officer.home');
    }


    function login_process(Request $request)
    {
        // $request->session()->regenerate();
        $credentials = [
            'acc_username' => $request->acc_username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            print_r($request->acc_username);
            print_r(Auth::user()->acc_position);
            // return redirect('manage_room');
            if (Auth::user()->acc_position == 'ผู้ดูแลห้องประชุม') {
                return redirect('dashboard');

            } else if (Auth::user()->acc_position == 'เจ้าหน้าที่') {

                return redirect('home_officer');

            }else if (Auth::user()->acc_position == 'ผู้ดูเเลระบบ') {
                print('login complete');

                return redirect('manage_room');
            }

            // if ($credentials['acc_position'] == 'เจ้าหน้าที่') {
            //     return Redirect::to('dashboard');//ไปหน้าหลักของเจ้าหน้าที่
            // } else if ($credentials['acc_position'] == 'ผู้ดูแลห้องประชุม') {
            //     return Redirect::to('edit_room');//ไปหน้าหลักของผู้ดูแลห้องประชุม
            // } else if ($credentials['acc_position'] == 'ผู้ดูแลระบบ') {
            //     return Redirect::to('titles');//ไปหน้าหลักของผู้ดูแลระบบ
            // }

        }

        // return Redirect::to('login')->with('error', ' *** Email or password incorrect *** ');

    }
    // $request->validate([
    // 'username' => 'required',
    // 'password' => 'required',
    // ]);

    // $data = $request->all();

    // if(Auth::attempt(['acc_username' => $data['username'], 'password' => $data['password']])){

    //         if($data['acc_position'] == 'เจ้าหน้าที่'){
    //         return Redirect::to('dashboard');//ไปหน้าหลักของเจ้าหน้าที่
    //     }
    //     else if($data['acc_position'] == 'ผู้ดูแลห้องประชุม'){
    //         return Redirect::to('titles');//ไปหน้าหลักของผู้ดูแลห้องประชุม
    //     }
    //     else if($data['acc_position'] == 'ผู้ดูแลระบบ'){
    //         return Redirect::to('titles');//ไปหน้าหลักของผู้ดูแลระบบ
    //     }

    // }else{
    //     return Redirect::to('login');
    // }


    public function logout()
    {
        Auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return Redirect::to('login');
    }

    public function username()
    {
        return 'acc_username';
    }

}
