<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Tour_controller;
use Illuminate\Support\Facades\Route;
use App\Models\Packages;
use App\Models\Sign_in_user;
use App\Models\User_user;
use App\Models\User_booking;
use App\Models\tbl_user_comment;
use App\Models\Admin;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/sign_in', function () {
    return view('sign_in');
});
Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/package', function () {
    return view('package');
});

Route::get('/switzerland', function () {
    return view('switzerland');
});

Route::get('/thailand', function () {
    return view('thailand');
});


Route::get('/booking', function () {
    return view('booking');
});

Route::get('dashboard/mainform', function () {
    return view('/dashboard/mainform');
});
Route::get('dashboard/booking', function () {
    return view('/dashboard/booking');
});
Route::get('dashboard/signin', function () {
    return view('/dashboard/signin');
});

Route::get('/signup', function () {
    return view('signup');
});



Route::get('/upload_packages', [Tour_controller::class, 'getPackgaeForm'])->name('upload_packages');
Route::post('/upload_package', [Tour_controller::class, 'upload_package'])->name('upload_package');
Route::get('/tbl_package', [Tour_controller::class, 'getPackages'] );


/*
//signin
Route::get('/sign_in', [Tour_controller::class, 'getSignInForm'])->name('sign_in');
Route::post('/sign_in', [Tour_controller::class, 'sign_in'])->name('sign_in');
Route::get('/tbl_sign_in_db', [Tour_controller::class, 'getSignInData'] );
*/
// signup
Route::get('/signup', [Tour_controller::class, 'getUserForm'])->name('sign_up');
Route::post('/sign_up', [Tour_controller::class, 'sign_up'])->name('sign_up');
Route::get('/tbl_user_db', [Tour_controller::class, 'getUserData'] );

//signin
Route::get('/booking', [Tour_controller::class, 'getBookingForm'])->name('booking');
Route::post('/booking', [Tour_controller::class, 'booking'])->name('booking');
Route::get('/userhistory', [Tour_controller::class, 'getBookingData'] );

//User comment china package
Route::get('/china', [Tour_controller::class, 'getUserCommentForm'])->name('china');
Route::post('/china', [Tour_controller::class, 'china'])->name('china');
Route::get('/tbl_user_comment', [Tour_controller::class, 'getUserCommentData'] );

//User comment switzerland package
Route::get('/switzerland', [Tour_controller::class, 'getUsersCommentForm'])->name('switzerland');
Route::post('/switzerland', [Tour_controller::class, 'switzerland'])->name('switzerland');
Route::get('/tbl_user_comment', [Tour_controller::class, 'getUsersCommentData'] );

//User comment china package
Route::get('/thailand', [Tour_controller::class, 'getUserssCommentForm'])->name('thailand');
Route::post('/thailand', [Tour_controller::class, 'thailand'])->name('thailand');
Route::get('/tbl_user_comment', [Tour_controller::class, 'getUserssCommentData'] );





/*
//User comment china package
Route::get('/admin_sign_in', [Tour_controller::class, 'getUserssCommentForm'])->name('admin_sign_in';
Route::post('/admin_sign_in', [Tour_controller::class, 'admin_sign_in'])->name('admin_sign_in');
Route::get('/tbl_tuser_comment', [Tour_controller::class, 'getUserssCommentData'] );
*/
// Login and Register
/*
Route::get('/user', [LoginController::class,'show_login_form'])->name('user');
    Route::post('/user', [LoginController::class,'process_login'])->name('user');

Route::get('/register', [LoginController::class,'show_signup_form'])->name('register');
    Route::post('/register', [LoginController::class,'process_signup']);

Route::post('/logout', [LoginController::class,'logout'])->name('logout');

Route::post('/tbl_sign_up_db', [Tour_controller::class, 'getSignUpData'] );

*/



// admin

Route::get('/admin_signin', function () {
    return view('admin_signin');
});

Route::get('/admin_profile', function () {
    return view('admin_profile');
});


Route::get('/admin/users_destroy', function () {
    return view('/admin/users_destroy');
});

















// Login/Register ..

Route::get('/logins', [LoginController::class,'show_login_form'])->name('login');
    Route::post('/logins', [LoginController::class,'process_login'])->name('logins');

Route::get('/register', [LoginController::class,'show_signup_form'])->name('register');
    Route::post('/register', [LoginController::class,'process_signup']);

Route::post('/logout', [LoginController::class,'logout'])->name('logout');


//for user booking history
Route::get('userhistory_edits/{id}',[Tour_controller::class, 'edits']);
Route::put('updates-data/{id}',[Tour_controller::class, 'updates']);


//for admin edit package
Route::get('editpackage/{id}',[Tour_controller::class, 'ed']);
Route::put('up-data/{id}',[Tour_controller::class, 'up']);




Route::get('deletepackage/{id}',[Tour_controller::class, 'del']);

Route::get('deletepackage/{id}',[Tour_controller::class, 'delete']);
