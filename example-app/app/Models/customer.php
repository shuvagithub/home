<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    // public $timestamps=false;
    function cusdata()
    {
        return $this->hasOne('App\Models\student');
    }
}
?>