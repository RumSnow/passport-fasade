@extends('layout')

@section('content')


  <section class="works" id="works">
    <div class="works__title d-flex">
      <h3 class="whiteBackground">
        Список работ определённой категории {{$id}}
      </h3>
    </div>

    <div class="wrap d-flex">
      <div class="whiteBackground case">
        <a href="/images/bugrinskij.jpg" data-lightbox="image-1" data-title="Название объекта1">
          <img src="/images/bugrinskij.jpg" alt="" class="case__img ">
        </a>
        <h4 class="case__title">
          Название объекта1
        </h4>
        <p class="case__text">
          Здесь указывавается дата выполнения этих работ по этому объекту
        </p>
      </div>
      <div class="whiteBackground case">
        <a href="/images/bugrinskij.jpg" data-lightbox="image-1" data-title="Название объекта2">
          <img src="/images/bugrinskij.jpg" alt="" class="case__img">
        </a>
        <h4 class="case__title">
          Название объекта2
        </h4>
        <p class="case__text">
          Здесь указывавается дата выполнения этих работ по этому объекту
        </p>
      </div>
      <div class="whiteBackground case">
        <a href="/images/bugrinskij.jpg" data-lightbox="image-1" data-title="Название объекта2">
          <img src="/images/bugrinskij.jpg" alt="" class="case__img">
        </a>
        <h4 class="case__title">
          Название объекта3
        </h4>
        <p class="case__text">
          Здесь указывавается дата выполнения этих работ по этому объекту
        </p>
      </div>
      <div class="whiteBackground case">
        <img src="../images/bugrinskij.jpg" alt="" class="case__img">

        <h4 class="case__title">
          Название объекта2
        </h4>
        <p class="case__text">
          Здесь указывавается дата выполнения этих работ по этому объекту
        </p>
      </div>
      <div class="whiteBackground case">
        <div class="case__img"></div>
        <h4 class="case__title">
          Название объекта3
        </h4>
        <p class="case__text">
          Здесь указывавается дата выполнения этих работ по этому объекту
        </p>
      </div>
      <div class="whiteBackground case">
        <div class="case__img"></div>
        <h4 class="case__title">
          Название объекта3
        </h4>
        <p class="case__text">
          Здесь указывавается дата выполнения этих работ по этому объекту
        </p>
      </div>
    </div>


  </section>



@endsection