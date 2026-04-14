<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $name='きみや';
        $keiken=['はるか','なの','ひめ','すずか'];


        return view('index',compact('name','keiken'));
    }
}
