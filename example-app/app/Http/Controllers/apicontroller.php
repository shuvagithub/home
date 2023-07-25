<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\customer;
use App\Models\student;

class apicontroller extends Controller
{
    function getdata()
    {
        return ['name'=>'anil'];
    }
    function list2($id=null)
    {
        return $id?customer::find($id):customer::all();
    }
    function add5(Request $req)
    {
        $student= new student;
        $student->Id=$req->id;
        $student->Name=$req->name;
        $student->Course=$req->course;
        $student->Marks=$req->marks;
        $result=$student->save();
        if($result){
        return ['result'=>'done'];
        }else{
            return['result'=>'not inserted'];
        }
    }
    function upd2(Request $req)
    {
        $student = student::find($req->Id);
        $student->Name=$req->Name;
        $student->Course=$req->Course;
        $student->Marks=$req->Marks;
        $result=$student->save();
        if($result){
            return ["result"=>"done"];
            }else{
                return ['result'=>'not inserted'];
            }
    }
    function delete2($id)
    {
        $customer = customer::find($id);
        $result= $customer->delete();
        if($result){
            return ["result"=>"done"];
            }else{
                return ['result'=>'not inserted'];
            } 
    }
}
