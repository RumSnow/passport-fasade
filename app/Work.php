<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Work extends Model{

  use Sluggable;

  protected $fillable = [
    'title',
    'city_id',
//    'category_id',
//    'stage_id',
    'finishDate',
//    'public',
    'description'
  ];

  public static function add($fields){
    $work = new static;
    $work->fill($fields);
    $work->save();
    return $work;
  }

  public function category(){
    return $this->belongsTo(Category::class);
  }

  public function stage(){
    return $this->belongsTo(Stage::class);
  }

  public function city(){
    return $this->belongsTo(City::class);
  }

  public function sluggable(){
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }

  public function edit($fields){
    $this->fill($fields);
    $this->save();
  }

  public function remove(){
    //сначала удалить картинку с сервера
    if($this->photoName != null){
      Storage::delete('photos/' . $this->photoName);
    }
    $this->delete();
  }

  public function uploadImage($photo){
    if($photo == null){
      return;
    }
    if($this->photoName != null){
      Storage::delete('photos/' . $this->photoName);
    }
    $photoName = str_random(10) . '.' . $photo->extension();
    $photo->storeAs('photos/', $photoName);
    $this->photoName = $photoName;
    $this->save();
  }

  public function getImage(){
    if($this->photoName == null){
      return '/photos/no-photo.jpg';
    }
    return '/photos/' . $this->photoName;
  }

  public function setCategory($id){
    if($id == null){
      return;
    }
    $this->category_id = $id;
    $this->save();
  }

  public function setStage($id){
    if($id == null){
      return;
    }
    $this->stage_id = $id;
    $this->save();
  }

  public function togglePublic($value){
    if($value == null){
      $this->public = 0;
    } else{
      $this->public = 1;
    }
    $this->save();
  }

  public function getCategoryTitle(){
    return $this->category != null ? $this->category->title : '';
  }

  public function getStageTitle(){
    return $this->stage != null ? $this->stage->title : '- - - -';
  }

  public function getPublic(){
    return ($this->public == 0) ? false : true;
  }


  public function getDate(){
//    dd($this->finishDate);
    if($this->finishDate != null){
      return Carbon::createFromFormat('Y-m-d', $this->finishDate)->format('F d, Y');
    }
    return 'none';
  }

}
