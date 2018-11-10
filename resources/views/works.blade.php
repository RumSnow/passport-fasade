@extends('layout')

@section('content')

  <section class="works" id="works">
    <div class="works__title d-flex">
      <h3 class="whiteBackground">
        {{$category}}
      </h3>
    </div>

    <div class="wrap d-flex">
      @foreach($works as $work)
        <div class="case">
          <a href="{{$work->getImage()}}" data-lightbox="image-1" data-title="{{$work->title}}">
            <img src="{{$work->getImage()}}" alt="" class="case__img ">
          </a>
          <h4 class="case__title">
            {{$work->title}}
          </h4>
          <p class="case__text">
            {{$work->description}}
          </p>
{{--          <p>{{$work->category->title}}</p>--}}
        </div>
      @endforeach

    </div>
    <div class="paginate">
      {{$works->links()}}
    </div>


  </section>



@endsection