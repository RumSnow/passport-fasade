@extends('layout')

@section('content')

  <section class="thanks" id="thanks">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="thanks whiteBackground">
            <h3 class="thanks__title">
              Слова благодарности наших заказчиков
            </h3>
            <p class="thanks__text ">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem consequatur corporis doloremque
              doloribus ducimus earum id, ipsa ipsum laudantium libero magni nemo optio perferendis porro repellat,
              repudiandae saepe velit.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <a href="/images/thanks_Kronos.jpg" data-lightbox="roadtrip" data-title="">
            <img src="/images/thanks_Kronos.jpg" class="thanks-img" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a href="/images/thanks_DSI.jpg" data-lightbox="roadtrip" data-title="">
            <img src="/images/thanks_DSI.jpg" class="thanks-img" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a href="/images/thanks_CMI.jpg" data-lightbox="roadtrip" data-title="">
            <img src="/images/thanks_CMI.jpg" class="thanks-img" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection