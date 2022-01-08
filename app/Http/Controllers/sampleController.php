<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{
    public function index(){
        $firstName="Pawan";
        $lastName="Rijal";

        //return view('FIrst.index')->with('name', $firstName);
        return view('FIrst.index', compact('firstName', 'lastName'));
    }

    public function dynamic($id){
        return view('FIrst.dynamic',compact('id'));
    }
}
