<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabykidController extends Controller
{
    public function showProducts(){
        return view('products.babykid');
       }
}
