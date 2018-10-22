@extends('admin.layout')


@section('adminContent')
  <div class="box-body">
    <div class="">
      <div class="box-header">
        <h2 class="box-title">Все категории</h2>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <a href="{{route('categories.create')}}" class="btn btn-success btn-lg">Добавить категорию</a> <br> <br>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Название</th>
            <th>Действия</th>
          </tr>
          </thead>
          <tbody>
          @foreach($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->title}}</td>
              <td class="indexTable">
                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">
                  <i class="fa fa-pencil"></i>
                </a>
                {{Form::open(['route'=> ['categories.destroy', $category->id],
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
            <th>#</th>
            <th>Название</th>
            <th>Действия</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <!-- /.box-body -->


@endsection