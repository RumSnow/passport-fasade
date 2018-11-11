@extends('admin.layout')

@section('adminContent')

  <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <h2 class="box__title">Просмотр работы</h2>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <img src="{{$work->getImage()}}" alt="" class="card__img">
                <h3 class="card__title">
                  {{$work->title}}
                </h3>
                <p class="card__desc">Город: <span>{{$work->city->city}}</span></p>
                <p class="card__desc">Категория: <span>{{$work->getCategoryTitle()}}</span></p>
                <p class="card__desc">Этап работы: <span>{{$work->getStageTitle()}}</span></p>
                <p class="card__desc">На сайте:
                  <span>
                    @if($work->getPublic())
                      <span>да</span>
                    @else
                      <span style="color:red;">Отсутствует на сайте</span>
                    @endif
                  </span>
                </p>

                <p class="card__desc">Дата окончания работ: <span>{{date('d-m-Y', strtotime($work->finishDate))}}</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <a href="{{route('works.edit', $work->id)}}" class="btn btn-info" type="submit">Изменить</a>
    <a href="{{route('works.index')}}" class="btn btn-default">Назад</a>

    </div>

  <div class="box-body">
    <div class="row">
      <div class="col-md-6">

      </div>
    </div>
  </div>

@endsection