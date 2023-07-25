<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class usercontroller extends Controller
{
    //
    function show(){
        return "hello world";
    }
    function getdata(Request $req)
    {
        $req->validate([
            'username'=>'required | max:10',
            'userpassword'=>'required | min:5'
        ]);
        return $req->input();
    }
    function index()
    {
        return DB::select("select * from customer");
    }
    function getd()
    {
        return student::all();
    }
}
