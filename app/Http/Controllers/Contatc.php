<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contatc extends Controller
{
    public function contatc(){
        var_dump($_POST);
        return view('site/contact');
    }  
}

