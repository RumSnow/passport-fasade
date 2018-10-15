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
          <div class="feature-thanks">
            <a href="#" class="clickImg" id="exampleModal">
              <img src="images/thanks_Kronos.jpg" class="thanks-img box-modal" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature-thanks">
            <img src="images/thanks_Kronos.jpg" class="thanks-img" alt="">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature-thanks">
            <img src="images/thanks_Kronos.jpg" class="thanks-img" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--<div style="display: none;">--}}
  {{--<div class="box-modal" id="exampleModal">--}}
  {{--<div class="box-modal_close arcticmodal-close">закрыть</div>--}}
  {{--<img src="images/thanks_Kronos.jpg"  class="thanks-img" alt="">--}}
  {{--</div>--}}
  {{--</div>--}}

@endsection