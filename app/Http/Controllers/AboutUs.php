<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUs extends Controller{

    public function about(){
        return view('site/about_us');
    }  
}
