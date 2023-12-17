<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    // public function Loadview(){
    //     return view('home');
    // }

    public function index(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
}
