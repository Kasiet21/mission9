<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

use App\Models\User; // User Model

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }
    */
    public function show_login_form()
    {
        return view('Adminsignin.login');
    }


    public function process_login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('name',$request->name)->first();

        if (auth()->attempt($credentials)) {  // user and password match

            return redirect("/");  // Redirect to homepage

        }else{

            session()->flash('message', 'Invalid credentials'); // Reture error if password and user wrong
            return redirect()->back();
        }

    }

    public function show_signup_form()
    {
        return view('Adminsignin.register');
    }

    public function process_signup(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        try{
            User::create([
                'name' => trim($request->input('name')),
                'email' => strtolower($request->input('email')),

                'password' => bcrypt($request->input('password')),  // Password bcrypt
            ]);

            session()->flash('message', 'Your account is created');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('message', 'Your registration is getting problem');

        }

        return redirect()->route('Adminsignin/login');

    }

    public function logout()
    {

        \Auth::logout();

        return redirect()->route('Adminsignin/login');

    }


}
