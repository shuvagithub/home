<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\logcontroller;
use App\Http\Controllers\DBcontroller;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\newcontroller;
use App\Mail\samplemail;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return new samplemail();
});
// Route::view('about','/about');
// Route::get('user',[usercontroller::class,'show']);
// Route::post('users2',[usercontroller::class,'getdata']);
// Route::view('log','log');
// Route::view("users",'users');
// Route::view('noaccess','noaccess');
// Route::view("home","home");
// Route::group(['middleware'=>['protectPage']],function(){
    // Route::view("users",'users');
// });
// Route middlewrae
// Route::view("home","home");
// Route::view('noaccess','noaccess');
// Route::view("users",'users')->middleware('protectPage');
// Route::get('user2',[usercontroller::class,'index']);
// Route::get("user3",[usercontroller::class,'getd']);
// Route::view('login','login');
// Session
// Route::view('profile','profile');
// Route::get('logout', function () {
// if(session()->has('user'))
// {
    // session()->pull('user',null);
// }
// return redirect('login');
// });
// Route::get('login', function () {
    // if(session()->has('user'))
    // {
        // return redirect('profile');
    // }
    // return view('login');
    // });
// Route::post("user5",[logcontroller::class,'userlogin']);
// flass session
Route::view("store","store");
Route::post('user2',[logcontroller::class,'store']);
// file Upload
Route::view('upload','upload');
Route::post("user6",[logcontroller::class,'upload']);
// Databse
Route::get('list',[DBcontroller::class,'show']);
Route::view('add','addcustomer');
Route::post('add2',[DBcontroller::class,'adddata']);
// crud
Route::get('form', [crudcontroller::class, 'home_fun']);
Route::get('int', [crudcontroller::class, 'form_fun']);
Route::post('formValue', [crudcontroller::class, 'formValue_fun']);
Route::post('formValue', [crudcontroller::class, 'formValue_fun']);
Route::get('delete/{iroll}', [crudcontroller::class, 'delete_fun']);
Route::get('update/{iroll}', [crudcontroller::class, 'update_fun']);
Route::post('upd_f', [crudcontroller::class, 'update_for_fun']);
Route::get('join2',[DBcontroller::class,'join']);
// relations
Route::get('data6',[DBcontroller::class,'relation']);
//    Bindimg
Route::get("data7/{key}",[newcontroller::class,'bin']);
// mail




