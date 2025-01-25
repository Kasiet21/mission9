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
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    public function show_upload_package()
    {
        return view('upload_package');
    }


    public function process_upload(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'day' => 'required',
            'description' => 'required',
            'price' => 'required'
            
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('name',$request->name)->first();

        if (auth()->attempt($credentials)) {  // user and password match

            return redirect("/upload_package");  // Redirect to homepage

        }else{

            session()->flash('message', 'Invalid credentials'); // Reture error if password and user wrong
            return redirect()->back();
        }

    }

    public function show_upload_package_second_time()
    {
        return view('upload_package');
    }

    public function process_upload_package(Request $request)
    {

        $request->validate([
            'country' => 'required',
            'day' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        try{
            User::create([
                'country' => trim($request->input('country')),
                'day' => number_format($request->input('day')),
                'desciption' => trim($request->input('description')), 
                'price' => number_format($request->input('price')), // Password bcrypt
            ]);

            session()->flash('message', 'Your account is created');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('message', 'Your registration is getting problem');

        }

        return redirect()->route('upload_package');

    }

    public function logout()
    {

        \Auth::logout();

        return redirect()->route('login');

    }


}