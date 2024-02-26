<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyController extends Controller
{
    public function showProducts(){
        return view('products.beauty');
       }
}
