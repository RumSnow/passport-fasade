<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class UsersController extends Controller{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    $users = User::all();
    $auth = Auth::user();
    return view('admin.users.index', compact('users', 'auth'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view('admin.users.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
    $this->validate($request, [
      'name' => 'required|unique:users',
      'email' => 'required|email|unique:users',
      'password' => 'required',
//      'avatar' => 'nullable|image'
    ]);
//    dd($request->all());
    $user = User::add($request->all());
    $user->generatePassword($request->get('password'));
//    $user->uploadAvatar($request->file('avatar'));
    $user->setRole($request['role']);
    return redirect()->route('users.index');
  }

//  /**
//   * Display the specified resource.
//   *
//   * @param  int $id
//   * @return \Illuminate\Http\Response
//   */
//  public function show($id)
//  {
//    //
//  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    if (!Auth::user()->is_admin()){
      return redirect()->route('users.index');
    }
    $user = User::find($id);
//    dd($user->role);
    return view('admin.users.edit', compact('user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id){
    $user = User::find($id);
//    dd($request->all());
    $this->validate($request, [
      'name' => 'required',
      'email' => [
        'required',
        'email',
        Rule::unique('users')->ignore($user->id),
      ],
      'avatar' => 'nullable|image'
    ]);
    $user->edit($request->all());                           // save name and email
    $user->generatePassword($request->get('password')); // save pass
    $user->uploadAvatar($request->file('avatar'));
    $user->setRole($request->get('role'));
    $user->toggleBan($request->get('banStatus'));
    return redirect()->route('users.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
    User::find($id)->remove();
    return redirect()->route('users.index');
  }
}
