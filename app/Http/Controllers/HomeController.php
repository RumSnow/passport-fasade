<?php

namespace App\Http\Controllers;

use App\Category;
use App\Work;
use Illuminate\Http\Request;

class HomeController extends Controller{

  public function index(){
    return view('index', compact('categories'));
  }

  public function works($id){
    $works = Work::where('category_id', $id)->paginate(6);
    $category = Category::find($id)->title;
//      return view('works', compact('works', 'category', 'categories'));
    return view('works')->with(['works' => $works, 'category' => $category]);
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
