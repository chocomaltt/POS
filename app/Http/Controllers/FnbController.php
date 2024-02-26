<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FnbController extends Controller
{
   public function showProducts(){
    return view('products.fnb');
   }
}
