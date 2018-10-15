<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(){
//      dd('ok');
      return view('index');
    }

    public function law(){
      return view('law');
    }

    public function thanks(){
      return view('thanks');
    }

    public function contact(){
      return view('contact');
    }
}
