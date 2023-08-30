<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Supplier extends Controller
{
    public function index(){
        $suppliers = ['fornecedor1','fornecedor2'];
        return view('app.supplier.index', compact('suppliers'));
    }
}
