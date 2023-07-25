<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
 

class newcontroller extends Controller
{
    function bin(customer $key)
    {
        return $key;
    }
}
