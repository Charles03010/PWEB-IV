<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Method GET
Route::get('/test', function(){
    echo "test";
});
Route::get('/test1',[testController::class,'index']);
Route::get('/test1/{id}',[testController::class,'coba']);
Route::get('/form',[testController::class,'formcoba']);


// Method POST
Route::post('/testpost',[testController::class,'simpan']);
