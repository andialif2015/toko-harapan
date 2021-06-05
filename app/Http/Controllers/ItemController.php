<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show(){
        return view('item.show');
    }
    public function create(){
        return view('item.create');
    }
}
