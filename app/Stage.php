<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function work(){
      return $this->hasMany(Work::class);
    }
}
