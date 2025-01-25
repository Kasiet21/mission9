<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; // include DB Class
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function  sign_in(Requestrequest)
    {
       users = new Sign_in_user();
    
       users->Name =request->input('Name');
       users->Password =request->input('Password');
       users->Contact_number =request->input('Contact_number');
       users->Email =request->input('Email');
       users->save();
        return redirect('/tbl_sign_in_db')->with('success', 'Tour booked successfully!');
        
    }
    
    public function getSignInData()
    {
       v_show = Sign_in_user::all();
        return view('/tbl_sign_in_db', ['v_show' =>v_show]);
    }
    
    public function getSignInForm()
    {
        return view('sign_in');
    } 


    public function edit($id)
    {
       users = packages::where('id',id)->get();
        return view('sign_in', ['v_show' =>users]);
    }

    public function edit_value(Requestrequest)
    {
       $users = packages::find($request->id);
       $users->country =request->input('Name');
       $users->day =request->input('Password');
       $users->description =request->input('Contact_number');
       $users->price =request->input('Email');
       $users->update();
        return redirect()->route('sign_in');
    }


    
}


