<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function about(){
        // return "hi";
        $name="悟空";
        $heroes=["悟空","達爾","名人","魯夫"];
        $js = "<script>alert('hi');</script>";
        return view("page/about",['x'=>$name,'js'=>$js,'heroes'=>$heroes]);
        // 用.也可以
        // return view("page.about");
    }
}
