@extends('admin.layout')

@section('adminContent')

  <div class="box-body">
    <div class="box-header">
      <h2 class="box-title">Добавить категорию</h2>
      @if($errors->any())
        @include('admin.errors')
      @endif
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="col-md-6">
        {{ Form::open(['route' => 'categories.store']) }}
        <div class="form-group">
          <label for="exampleInputEmail1">Название</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="title">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success">Добавить</button>
        </div>
        {{ Form::close() }}
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box-body -->

@endsection


