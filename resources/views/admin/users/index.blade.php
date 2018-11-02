@extends('admin.layout')

@section('adminContent')

  <div class="box-body">
    <div class="">
      <div class="box-header">
        <h2 class="box-title">Все пользователи</h2>
      </div>

    <!-- /.box-header -->
      <div class="box-body">

        @if($auth->is_admin())
        <a href="{{route('users.create')}}" class="btn btn-success btn-lg">Добавить пользователя</a> <br> <br>
        @endif()
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            {{--<th>#</th>--}}
            <th>Имя</th>
            <th>Email</th>
            <th>Роль</th>
            <th>Аватар</th>
            @if($auth->is_admin())
            <th>Действия</th>
            @endif

          </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
            @if($user->id !== 1)
            <tr>
              {{--            <td>{{$user->id}}</td>--}}
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                @if($user->banStatus == 0)
                  {{ $user->role == 2 ? 'Директор' : 'Работник'}}
                @else
                  <span class="statusUser">Забанен</span>
                @endif

              </td>
              <td>
                <img src="{{$user->getAvatar()}}" alt="" width="60px">
              </td>
              @if($auth->is_admin())
              <td class="indexTable">
                  <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">
                    <i class="fa fa-pencil"></i>
                  </a>
                  {{Form::open(['route'=> ['users.destroy', $user->id],
                      'method'=>'delete'])}}
                  <button onclick="return confirm('Вы уверены?');" type="submit" class="delete">
                    <i class="fa fa-remove"></i>
                  </button>
                  {{Form::close()}}
              </td>
              @endif
            </tr>
            @else
              @continue
            @endif
          @endforeach
          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

@endsection