@extends('admin.layout')


@section('adminContent')

  <!-- /.box-header -->
  <div class="box-body">
    <div class="box-header">
      <h2 class="box-title">Добавить новый объект</h2>
      @if($errors->any())
        @include('admin.errors')
      @endif
    </div>
    <div class="box-body">
      <div class="col-md-6">
        {{Form::open([
   'route' => 'works.store',
   'files' => true])}}
        <div class="form-group">
          <label for="exampleInputEmail1">Название объекта</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{old('title')}}">
        </div>

        <div class="form-group">
          <label>Город:</label>
          {{Form::select(
          'city_id',
          ['1' => 'Новосибирск', '2' => 'Красноярск'],
          1,
          ['class' => 'form-control select2']
          )}}
        </div>

        <div class="form-group">
          <label>Категория</label>
          <p class="help-block" style="float: right; font-size: 12px; margin-bottom:0">(не обязательно)</p>

          {{Form::select(
          'category_id',
          $categories,
          1,
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
         1,
         ['class' => 'form-control select2']
         )}}
          </div>

        <div class="form-group">
          <label>Дата выполнения работы:</label>
          <p class="help-block" style="float: right; font-size: 12px; margin-bottom:0">(не обязательно)</p>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input name="finishDate" type="date" class="form-control pull-right" value="{{date('Y-m-d')}}" title="">
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputFile">Фотография объекта</label>
          <input type="file" name="photo">
          <p class="help-block">Только картинки!!!</p>
        </div>

        <div class="form-group">

          {{Form::checkbox('public', '1', false)}}
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
          <button class="btn btn-success" type="submit">Добавить</button>
          <a href="{{route('works.index')}}" class="btn btn-default">Назад</a>
        </div>
        {{Form::close()}}
      </div>
    </div>

  </div>


@endsection