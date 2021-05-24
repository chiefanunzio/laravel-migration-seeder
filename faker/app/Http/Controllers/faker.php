<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faker extends Controller
{
    public function myFun(){

        return view('pages.home');       
    }
}
