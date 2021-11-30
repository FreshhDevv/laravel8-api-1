<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sample() {
        //echo "<h1>Welcome to sample controller</h1>";

        return view('sample-view',[
            "name" => "FreshDev",
            "email" => "freshdev@gmail.com"
        ]);
    }
}
