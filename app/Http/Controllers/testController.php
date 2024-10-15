<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        echo "test1";
    }
    public function coba($id){
        echo "test1 dengan id ".$id;
    }
    public function formcoba(){
        return view('form');
    }
    public function simpan(Request $request){
        echo $request->npm;
    }
    public function checkPassword(Request $request){
        if ($request->password == '523') {
            return response()->json(['status' => 'success', 'message' => 'Password is correct']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Password is incorrect']);
        }
    }
}
