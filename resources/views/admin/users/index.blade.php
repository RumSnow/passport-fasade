@extends('admin.layout')

@section('adminContent')

  <div class="box-body">
    <div class="">
      <div class="box-header">
        <h2 class="box-title">Все пользователи</h2>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <a href="{{route('users.create')}}" class="btn btn-success btn-lg">Добавить пользователя</a> <br> <br>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            {{--<th>#</th>--}}
            <th>Имя</th>
            <th>Email</th>
            <th>Роль</th>
            <th>Аватар</th>
            <th>Действия</th>
          </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
          <tr>
{{--            <td>{{$user->id}}</td>--}}
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              @if($user->banStatus == 0)
                {{ $user->is_admin == 1 ? 'Администратор' : 'Служащий'}}
                @else
                <span class="statusUser">Забанен</span>
              @endif

            </td>
            <td>
              <img src="{{$user->getAvatar()}}" alt="" width="60px">
            </td>
            <td class="indexTable">
              {{--<a href="#" class="btn btn-info">--}}
              {{--<i class="fa fa-eye"></i>--}}
              {{--</a>--}}
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
          </tr>
          @endforeach
          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

@endsection