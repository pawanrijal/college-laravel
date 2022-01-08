<?php

namespace App\Http\Controllers;

use App\Models\Hello;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function create(){
        $hello=new Hello();
        $hello->name="Sanjeev Katel";
        $hello->roll_no=36;
        $hello->faculty="CSIT";


        $hello->save();

        dd($hello);
    }


    public function browse(){
        $hellos=Hello::query()->where('id','=',1);

        dd($hellos);


    }
}
