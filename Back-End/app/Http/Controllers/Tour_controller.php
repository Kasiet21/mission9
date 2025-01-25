<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour_model;
use Illuminate\Support\Facades\DB; // include DB Class
use App\Models\Packages;
use App\Models\Sign_in_user;
use App\Models\User_user;
use App\Models\User_booking;
use App\Models\tbl_user_comment;

//use App\Models\UploadPackage;
class Tour_controller extends Controller
{
    public function edit($id)
    {
        $tour = packages::where('id', $id)->get();
        return view('upload_package', ['v_show' => $tour]);
    }

    public function edit_value(Request $request)
    {
        $tour = packages::find($request->id);
        $tour->country = $request->input('country');
        $tour->day = $request->input('day');
        $tour->description = $request->input('description');
        $tour->price = $request->input('price');
        $tour->picture = $request->input('photo_url');
        
        $tour->update();
        return redirect()->route('upload_package');
    }


    public function upload_package(Request $request)
    {
        $tour = new Packages();

        $tour->country = $request->input('country');
        $tour->day = $request->input('day');
        $tour->description = $request->input('description');
        $tour->price = $request->input('price');
        $tour->picture = $request->input('photo_url');
        $tour->save();
        return redirect('/tbl_package')->with('success', 'Tour booked successfully!');
        
    }

    public function getPackages()
    {
        $v_show = Packages::all();
        return view('tbl_package', ['v_show' => $v_show]);
    }

    public function getPackgaeForm()
    {
        return view('upload_package');
    } 



//sign_up_db [user data] in the database page
public function sign_up(Request $request)
{
    $tour = new User_user();

    $tour->Name = $request->input('Name');
    $tour->Password = $request->input('Password');
    $tour->Contact_number = $request->input('Contact_number');
    $tour->Email = $request->input('Email');
    $tour->save();
    return redirect('/tbl_user_db')->with('success', 'Tour booked successfully!');
    
}

public function getUserData()
{
    $v_show = User_user::all();
    return view('/tbl_user_db', ['v_show' => $v_show]);
}

public function getUserForm()
{
    return view('sign_up');
} 













//booking [userhistory data] in the database page
public function booking(Request $request)
{
    $tour = new User_booking();

        $tour->name = $request->input('name');
        $tour->email = $request->input('email');
        $tour->start = $request->input('start');
        $tour->country = $request->input('country');
        $tour->amount = $request->input('amount');
        
        $tour->s_request = $request->input('s_request'); 

        $tour->save();
    return redirect('/userhistory')->with('success', 'Tour booked successfully!');
    
}

public function getBookingData()
{
    $v_show = User_booking::all();
    return view('/userhistory', ['v_show' => $v_show]);
}

public function getBookingForm()
{
    return view('booking');
} 




//User Comment in chiana pakage
public function china(Request $request)
{
    $tour = new tbl_user_comment();

        $tour->name= $request->input('name');
        $tour->email = $request->input('email');
        $tour->website = $request->input('website');
        $tour->message = $request->input('message');

        $tour->save();
    return redirect('/tbl_user_comment')->with('success', 'Tour booked successfully!');
    
}

public function getUserCommentData()
{
    $v_show =  tbl_user_comment::all();
    return view('/tbl_user_comment', ['v_show' => $v_show]);
}

public function getUserCommentForm()
{
    return view('china');
} 


//User Comment in switzerland pakage
public function switzerland(Request $request)
{
    $tour = new tbl_user_comment();

        $tour->name= $request->input('name');
        $tour->email = $request->input('email');
        $tour->website = $request->input('website');
        $tour->message = $request->input('message');

        $tour->save();
    return redirect('/tbl_user_comment')->with('success', 'Tour booked successfully!');
    
}

public function getUsersCommentData()
{
    $v_show = tbl_user_comment::all();
    return view('/tbl_user_comment', ['v_show' => $v_show]);
}

public function getUsersCommentForm()
{
    return view('switzerland');
} 


//User Comment in thailand pakage
public function thailand(Request $request)
{
    $tour = new tbl_user_comment();

        $tour->name= $request->input('name');
        $tour->email = $request->input('email');
        $tour->website = $request->input('website');
        $tour->message = $request->input('message');

        $tour->save();
    return redirect('/tbl_user_comment')->with('success', 'Tour booked successfully!');
    
}

public function getUserssCommentData()
{
    $v_show = tbl_user_comment::all();
    return view('/tbl_user_comment', ['v_show' => $v_show]);
}

public function getUserssCommentForm()
{
    return view('thailand');
} 



//edit user booking
public function edits($id){
    $tour = User_booking::find($id);
    return view('userhistory_edits', compact('tour'));
}
public function updates(Request $request,$id){
    $tour = User_booking::find($id);
    $tour->name = $request->input('name');
    $tour->email = $request->input('email');
    $tour->start = $request->input('start');
    $tour->country = $request->input('country');
    $tour->amount = $request->input('amount');
    $tour->s_request = $request->input('s_request'); 
    $tour->update();
    return redirect('/userhistory')->with('status', "updated");
}


//edit package admin
public function ed($id){
    $tour = packages::find($id);
    return view('editpackage', compact('tour'));
}
public function up(Request $request, $id){
    $tour = Packages::find($id);
    $tour->country = $request->input('country');
    $tour->day = $request->input('day');
    $tour->description = $request->input('description');
    $tour->price = $request->input('price');
    $tour->picture = $request->input('photo_url');
    $tour->update();
    return redirect('/tbl_package')->with('status', 'updated!');
}



//delete package admin
public function del($id){
    $tour = packages::find($id);
    $tour -> delete();
    return redirect('/tbl_package')->with('status', 'updated!');
}

public function delete($id){
    $tour = User_user::find($id);
    $tour -> delete();
    return redirect('/tbl_user_db')->with('status', 'updated!');
}



}