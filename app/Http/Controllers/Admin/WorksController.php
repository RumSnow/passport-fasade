<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Stage;
use App\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorksController extends Controller{

  public function index(){
//    $work = Work::first();
//    dd($work->category->title);
    $works = Work::all();
    return view('admin.works.index', [
      'works' => $works
    ]);
  }

  public function create(){
    $categories = Category::pluck('title', 'id')->all();
    $stages = Stage::pluck('title', 'id')->all();
    return view('admin.works.create', compact('categories', 'stages'));
  }

  public function store(Request $request){
    $this->validate($request, [
      'title' => 'required',
      'city_id' => 'required',
      'photo' => 'required|image',
    ]);
//    dd($request->all());
    $work = Work::add($request->all());
    $work->uploadImage($request->file('photo'));
    $work->setCategory($request->get('category_id'));
    $work->setStage($request->get('stage_id'));
    $work->togglePublic($request->get('public'));
    return redirect()->route('works.index');
  }

  public function edit($id){
    $work = Work::find($id);
    $categories = Category::pluck('title', 'id')->all();
    $stages = Stage::pluck('title', 'id')->all();
    return view('admin.works.edit', compact('categories', 'stages', 'work'));
  }

  public function update(Request $request, $id){
    $this->validate($request, [
      'title' => 'required',
      'city_id' => 'required',
      'photo' => 'image',
    ]);
//    dd($request->all());
    $work = Work::find($id);
    $work->edit($request->all());
    $work->uploadImage($request->file('photo'));
    $work->setCategory($request->get('category_id'));
    $work->setStage($request->get('stage_id'));
    $work->togglePublic($request->get('public'));
    return redirect()->route('works.index');
  }

  public function destroy($id){
    Work::find($id)->remove();
    return redirect()->route('works.index');
  }
}