<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;



class Mycontroller extends Controller{


    public function hello(){
        $myString="Hello World";
        return view('FIrst.hello',compact('myString'));
    }

}
