<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Work extends Model{

  use Sluggable;

  protected $fillable=[
    'title',
    'city_id',
//    'category_id',
//    'stage_id',
    'finishDate',
//    'public',
    'description'
  ];

  public function category(){
    return $this->belongsTo(Category::class);
  }

  public function stage(){
    return $this->belongsTo(Stage::class);
  }

  public function sluggable(){
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }

  public static function add($fields){
    $post = new static;
    $post->fill($fields);
    $post->save();
    return $post;
  }

  public function edit($fields){
    $this->fill($fields);
    $this->save();
  }

  public function remove(){
    //сначала удалить картинку с сервера
    if ($this->photoName != null) {
      Storage::delete('photos/' . $this->photoName);
    }
    $this->delete();
  }

  public function uploadImage($photo){
    if($photo == null) { return ; }
    if ($this->photoName != null){
      Storage::delete('photos/'.$this->photoName);
    }
    $photoName = str_random(10).'.'.$photo->extension();
    $photo->storeAs('photos/', $photoName);
    $this->photoName = $photoName;
    $this->save();
  }

  public function getImage(){
    if ($this->photoName == null){
      return '/photos/no-photo.jpg';
    }
    return '/photos/'.$this->photoName;
  }

  public function setCategory($id){
    if ($id == null){return;}
    $this->category_id = $id;
    $this->save();
  }

  public function setStage($id){
    if ($id == null){return;}
    $this->stage_id = $id;
    $this->save();
  }

  public function setPublic(){
    $this->public = 1;
    $this->save();
  }

  public function togglePublic($value){
//    dd($value);
    if($value == null){
//      dd('dasfas');
      $this->public = 0;
      $this->save();
    } else {
      return $this->setPublic();
    }
  }

  public function getCategoryTitle(){
    return $this->category != null ? $this->category->title : '- - - -';
  }

  public function getStageTitle(){
    return $this->stage != null ? $this->stage->title : '- - - -';
  }

  public function getPublic(){
    return ($this->public == 0) ? false : true;
  }


//  public function setFinishDateAttribute($value){
//    $date = Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
//    $this->attributes['finishDate']= $date;
//  }

}
