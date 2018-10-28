@extends('layout')

@section('content')


  <section class="works" id="works">
    <div class="works__title d-flex">
      <h3 class="whiteBackground">
        {{$category->title}}
      </h3>
    </div>

    <div class="wrap d-flex">
      @foreach($works as $work)
      <div class="whiteBackground case">
        <a href="{{$work->getImage()}}" data-lightbox="image-1" data-title="{{$work->title}}">
          <img src="{{$work->getImage()}}" alt="" class="case__img ">
        </a>
        <h4 class="case__title">
          {{$work->title}}
        </h4>
        <p class="case__text">
          {{$work->description}}
        </p>
      </div>
      @endforeach

    </div>


  </section>



@endsection