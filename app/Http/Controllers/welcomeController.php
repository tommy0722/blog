<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function about(){
        // return "hi";
        $name="悟空";
        return view("page/about",['x'=>$name]);
        // 用.也可以
        // return view("page.about");
    }
}
