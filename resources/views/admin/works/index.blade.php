@extends('admin.layout')

@section('adminContent')

  <!-- /.box-header -->
  <div class="box-body">
    <div class="box-header">
      <h2 class="box-title">Все выполненые работы</h2>

    </div>
    <a href="{{route('works.create')}}" class="btn btn-success btn-lg">Добавить новый объект</a> <br> <br>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th></th>
        <th>Изображение</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Этап</th>
        <th>Публикация</th>
        {{--<th>Завершено:</th>--}}
        <th>Действия</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($works as $work)
        <tr>
          <td>{{$work->id}}</td>
          <td>
            <img src="{{$work->getImage()}}" width="100">
          </td>
          <td>
            <a href="{{route('works.show', $work->id)}}">{{$work->title}}</a>
          </td>
          <td>{{$work->getCategoryTitle()}}</td>
          <td>{{$work->getStageTitle()}}</td>
          <td>
            @if($work->public == 1)
              На сайте
            @endif
          </td>
{{--                    <td>{{$work->finishDate}}</td>--}}
          <td class="indexTable">
            <a href="{{route('works.edit', $work->id)}}" class="btn btn-warning">
              <i class="fa fa-pencil"></i>
            </a>
            {{Form::open(['route'=> ['works.destroy', $work->id],
                  'method'=>'delete'])}}
            <button onclick="return confirm('Вы уверены?');" type="submit" class="delete">
              <i class="fa fa-remove"></i>
            </button>
            {{Form::close()}}
          </td>
        </tr>
      @endforeach

      </tbody>
      <tfoot>
      <tr>
        <th></th>
        <th>Изображение</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Этап</th>
        <th>Публикация</th>
        {{--<th>Завершено:</th>--}}
        <th>Действия</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->

@endsection