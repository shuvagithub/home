<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class crudcontroller extends Controller
{
    //
    function home_fun()
    {
        $record=DB::table('students')->get();
        return view("form2")->with('data',$record);
    }
    function form_fun()
    {
        return view("form4");
    }
    function formValue_fun(request $var)
    {
        $id = $var->Id;
       // echo $roll;
        $name =$var->Name;
        $course = $var->Course;
        $marks = $var->Marks;

        $arr =array();
        $arr['Id'] = $id;
        $arr['Name'] = $name;
        $arr['Course'] = $course;
        $arr['Marks'] = $marks;
        DB::table('students')->insert($arr);
        return redirect('form');
    }
    function delete_fun($iroll)
    {
       DB::table('students')->where('Id',$iroll)->delete();
       return redirect('form'); 
    }
    function update_fun($iroll)
    {
       $record= DB::table('students')->where('Id',$iroll)->first();
        return view('upd')->with('data',$record);
    }
    function update_for_fun(request $var)
    {
        $id = $var->Id;
         $name =$var->Name;
         $course = $var->Course;
         $marks = $var->Marks;
 
         $arr =array();
         $arr['Id'] = $id;
         $arr['Name'] = $name;
         $arr['Course'] = $course;
         $arr['Marks'] = $marks;
         DB::table('students')->where('Id',$id)->update($arr);
         return redirect('form');
    }
}
