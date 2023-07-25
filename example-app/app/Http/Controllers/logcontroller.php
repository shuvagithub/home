<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logcontroller extends Controller
{
    //
    function userlogin(Request $req)
    {
        $data= $req->input('user');
        $req->session()->put('user',$data);
    return redirect('profile');
    }
    function store(Request $req)
    {
        $data= $req->input('user');
        $req->session()->flash('user',$data);
        return redirect('store');
    }
    function upload(Request $req)
    {
        return $req->file('file')->store('img');
    }
}
