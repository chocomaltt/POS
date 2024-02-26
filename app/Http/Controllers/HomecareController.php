<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomecareController extends Controller
{
    public function showProducts(){
        return view('products.homecare');
       }
}
