<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function about(){
        // return "hi";
        return view("page/about");
        // 用.也可以
        // return view("page.about");
    }
}
