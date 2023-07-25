<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('data',[apicontroller::class,'getdata']);
Route::get('list/{id?}',[apicontroller::class,'list2']);
Route::post('add8',[apicontroller::class,'add5']);  
Route::put('upd',[apicontroller::class,'upd2']);
Route::delete('delete/{id}',[apicontroller::class,'delete2']);


