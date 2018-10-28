@extends('admin/layout')


@section('adminContent')

  <!-- /.box-header -->
  <div class="box-body">
    <div class="box-header">
      <h2 class="box-title">Редактирование объекта</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="{{$work->getImage()}}" alt="" width="400px">
        </div>
      </div>
    @if($errors->any())
        @include('admin.errors')
      @endif
    </div>
    <div class="box-body">
      <div class="col-md-6">
        {{Form::open([
   'route' => ['works.update', $work->id],
   'files' => true,
   'method' => 'put'
   ])}}
        <div class="form-group">
          <label for="exampleInputEmail1">Название объекта</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{$work->title}}">
        </div>

        <div class="form-group">
          <label>Город:</label>
          {{Form::select(
          'city_id',
          ['1' => 'Новосибирск', '2' => 'Красноярск'],
          $work->city_id,
          ['class' => 'form-control select2']
          )}}
        </div>
        <div class="form-group">
          <label>Категория</label>
          <p class="help-block" style="float: right; font-size: 12px; margin-bottom:0">(не обязательно)</p>
          {{Form::select(
          'category_id',
          $categories,
          $work->getCategoryTitle(),
          ['class' => 'form-control select2',
          'placeholder' => ''
          ]
          )}}
        </div>

        <div class="form-group">
          <label>Этап выполнения работы:</label>
          <p class="help-block" style="float: right; font-size: 12px; margin-bottom:0">(не обязательно)</p>
          {{Form::select(
         'stage_id',
         $stages,
         $work->getStageTitle(),
         ['class' => 'form-control select2']
         )}}
        </div>

        <div class="form-group">
{{--          {{date("d F y",strtotime($work->finishDate))}}--}}
          <label>Дата выполнения работы: </label>
          <p class="help-block" style="float: right; font-size: 12px; margin-bottom:0">(не обязательно)</p>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="date" name="finishDate" class="form-control pull-right" value="{{$work->finishDate}}" title="">
          </div>
          <!-- /.input group -->
        </div>

        <div class="form-group">
          <label for="exampleInputFile">Загрузить другую фотографию объекта</label>
          <input type="file" name="photo">
          <p class="help-block">Только картинки!!!</p>
        </div>

        <div class="form-group">
          {{Form::checkbox('public', '1', $work->getPublic(), ['class'=>'minimal'])}}
          <label>
            Разместить на сайте?
          </label>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Краткое описание</label>
          <p class="help-block" style="float: right; font-size: 12px; margin-bottom:0">(не обязательно)</p>
          <textarea name="description" class="form-control" cols="30" rows="10" title=""></textarea>

        </div>

        <div class="form-group">
          <button class="btn btn-success" type="submit">Изменить</button>
          <a href="{{route('works.index')}}" class="btn btn-default">Все объекты</a>
        </div>
        {{Form::close()}}
      </div>
    </div>

  </div>


@endsection