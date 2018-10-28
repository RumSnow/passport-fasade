@extends('admin.layout')

@section('adminContent')

  <div class="box-body">
    <div class="">
      <div class="box-header">
        <h2 class="box-title">Изменить пользователя</h2>
        @if($errors->any())
          @include('admin.errors')
        @endif
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="col-md-6">
          {{Form::open([
          'route'=>['users.update', $user->id],
          'files'=>true,
          'method'=>'put'
          ])}}
          <div class="form-group">
            <label for="exampleInputEmail1">Имя</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$user->name}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{$user->email}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Пароль</label>
            <input type="password" name="password" class="form-control" id="exampleInputEmail1">
          </div>

          <div class="form-group">
            <label>Роль</label>
            {{Form::select(
             'is_admin',
             ['1' => 'Администратор', '2' => 'Служащий'],
             $user->is_admin,
             ['class' => 'form-control select2']
             )}}
          </div>

          <img src="{{$user->getAvatar()}}" alt="" width="200px">
          <div class="form-group">
            <label for="exampleInputEmail1">Аватар</label>
            <input type="file" name="avatar" id="exampleInputEmail1">
            <br>
          </div>

          <div class="form-group">
              {{Form::checkbox('banStatus', '1', $user->banStatus==1)}}
              <label>
                - забанить пользователя
              </label>
          </div>

          <div class="form-group">
            <button class="btn btn-warning">Изменить</button>
            <a href="{{route('users.index')}}" class="btn btn-info">Назад</a>
          </div>
          {{Form::close()}}
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

@endsection