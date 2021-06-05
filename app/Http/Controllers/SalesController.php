<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function show(){
        return view('sales.show');
    }

    public function create(){
        return view('sales.create');
    }
}
