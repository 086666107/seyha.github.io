<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function menu(){
  	return view('layouts.back-end.Menu-back-end');
    
    }
}
