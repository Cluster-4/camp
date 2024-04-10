<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function viewlogin(){
        return view('loginpage');
    }
    public function viewEditRoom(){
        return view('edit_room');
    }
    public function login(Request $request)
    {
        $credentials = [
            'name'=>$request->name,
            'password'=>$request->password,
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


    // public function loginprocess(Request $request)
    // {
    //     $input = $request->all();
    //     $this->validate($request, [
    //         'username' => 'required|email',
    //         'password' => 'required'
    //     ]);
    //     if (auth()->attempt(array('username' => $input['name'], 'password' => $input['password']))) {
    //         if (auth()->user()->id == 1) {
    //             return redirect()->route('admin');
    //         } elseif (auth()->user()->id == 2) {
    //             return redirect()->route('admin2');
    //         } elseif (auth()->user()->id == 3) {
    //             return redirect()->route('admin3');
    //         }
    //     } else {
    //         return redirect()->route('edit_size_room')->with('error', 'user and pass wrong bro');
    //     }
    // }
}

