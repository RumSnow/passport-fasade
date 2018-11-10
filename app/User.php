<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable{
  const IS_BANNED = 1;
  const IS_ACTIVE = 0;

  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password', 'role'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public static function add($fields){
    $user = new static;
    $user->fill($fields);
    $user->save();
    return $user;
  }


  public function edit($fields){
    $this->fill($fields);
    $this->save();
  }

  public function remove(){
    $this->deleteAvatar();
    $this->delete();
  }

  public function uploadAvatar($avatarPhoto){
    if ($avatarPhoto == null) {
      return;
    }
    $this->deleteAvatar();
    $avatarName = str_random(3) . '.' . $avatarPhoto->extension();
    $avatarPhoto->storeAs('avatars', $avatarName);
    $this->avatar = $avatarName;
    $this->save();
  }

  public function deleteAvatar(){
    if ($this->avatar != null){
      Storage::delete('avatar/',$this->avatar);
    }
  }

  public function getAvatar(){
    if ($this->avatar == null){
      return '/avatars/no-avatar.jpg';
    }
    return '/avatars/' . $this->avatar;
  }

  public function toggleBan($value){
    $value == null ?  $this->banStatus = 0 : $this->banStatus = 1;
    $this->save();
  }

  public function setRole($value){
    $this->role = $value;
    $this->save();
  }

  public function setStatus($value){
    $value ? $this->status = User::IS_BANNED : $this->status = User::IS_ACTIVE ;
    $this->save();
  }

  public function is_admin(){
    return ($this->role == 1 or $this->role == 2) ? true : false;
  }

}
