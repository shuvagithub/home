<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;
use App\Models\customer;
use DB;
class DBcontroller extends Controller
{
    function show()
    {
    $data= student::paginate(5);
    return view('list',['students'=>$data]);
    }
    function adddata(Request $var)
    {
        // $cust= new customer;
        // $cust->Id=$req->id;
        // $cust->Name=$req->name;
        // $cust->Price=$req->price;
        // $cust->Image=$req->file;
        // $cust->save();
        // return redirect('add');


        $id = $var->id;
         $name =$var->name;
         $price = $var->price;
         $file = $var->file;
         $arr =array();
         $arr['Id'] = $id;
         $arr['Name'] = $name;
         $arr['Price'] = $price;
         $arr['Image'] = $file;
         DB::table('customers')->insert($arr);
         return redirect('add');
    }
    // function join()
    // {
        // return DB::table('customers')->join('students','customers.Id','=','students.Id')
        // ->get();
    // }
function relation()
{
    return student::find(1)->cusdata;
}
    function bin($key)
    {
        return $key;
    }
}

?>