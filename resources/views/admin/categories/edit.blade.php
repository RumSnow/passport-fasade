@extends('admin.layout')

@section('adminContent')

  <div class="box-body">
    <div class="">
      <div class="box-header">
        <h2 class="box-title">Изменить категорию</h2>
        @if($errors->any())
          @include('admin.errors')
        @endif
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="col-md-6">
          {{ Form::open(['route' => ['categories.update', $category->id],
          'method' => 'put'])}}
          <div class="form-group">
            <label for="exampleInputEmail1">Название</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$category->title}}" name="title">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-warning">Изменить</button>
          </div>
          {{ Form::close() }}
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </div>


@endsection
