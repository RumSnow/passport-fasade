@extends('admin.layout')

@section('adminContent')

  <div class="box-body">
    <div class="">
      <div class="box-header">
        <h2 class="box-title">Добавить пользователя</h2>
        @if($errors->any())
          @include('admin.errors')
        @endif
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="col-md-6">
          {{Form::open(['route'=>'users.store', 'files'=>true]) }}
          <div class="form-group">
            <label for="exampleInputEmail1">Имя</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name')}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Пароль</label>
            <input type="password" name="password" class="form-control" id="exampleInputEmail1">
          </div>

          <div class="form-group">
            <label>Уровень доступа</label>
            {{Form::select(
             'Role',
             ['2' => 'Директор', '3' => 'Работник'],
             3,
             ['class' => 'form-control select2']
             )}}
          </div>

          {{--<div class="form-group">--}}
          {{--<label for="exampleInputEmail1">Аватар</label>--}}
          {{--<input type="file" name="avatar" id="exampleInputEmail1" >--}}
          {{--</div>--}}

          {{--<div class="form-group">--}}
          {{--<div class="checkbox">--}}
          {{--<label>--}}
          {{--<input type="checkbox" name="status">--}}
          {{--Бан--}}
          {{--</label>--}}
          {{--</div>--}}
          {{--</div>--}}

          <div class="form-group">
            <button class="btn btn-success">Добавить</button>
          </div>
          {{Form::close()}}
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

@endsection