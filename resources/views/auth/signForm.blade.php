@extends('auth.layoutAuth')

@section('content')

  <style>
    /*div {*/
    /*display: none;*/
    /*}*/
  </style>

  <div class="container background-sign">
    <div class="row">
      <div class="col-md-12">

        <div class="tab" role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">sign in</a>
            </li>
            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">sign up</a>
            </li>
          </ul>
          <!-- Show Errors -->
          <div class="tab-content tabs">
            @if(session('errorSign') || $errors->any() || session('status'))
              @include('admin.errors')
            @endif


            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
              {{--<form class="form-horizontal">--}}
              {{Form::open([
              'route' => 'login',
              'method' => 'post',
              'class' => 'form-horizontal'
              ])}}
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                       value="{{old('password')}}">
              </div>
              <div class="form-group">
                {{Form::checkbox('remember', '1', true, [
                'class' => 'main-checkbox'
                ])}}
                <label for="checkbox1">Keep me Signed in</label>
              </div>
              <div class="form-group">
                <button type="submit" class="btnSign btn btn-default ">Sign in</button>
              </div>
              <div class="form-group">
                <a href="{{route('/')}}" class="buttonBack">Вернуться на сайт</a>
              </div>
              {{Form::close()}}

              <div class="forgot-pass">
                <a href="javascript:void(0)" onclick="showHide('forgot')" class="btn">forgot password</a>
              </div>
              <div id="forgot" style="overflow: hidden; display: none;" class="forgot">
                {{Form::open([
                'route'=> 'password.email',
                'method'=> 'post',
                'class'=>'form-horizontal'
                ])}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Для восстановления входа введите email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-Success">Отправить ссылку на почту</button>
                </div>
                {{Form::close()}}

              </div>

            </div>


            <div role="tabpanel" class="tab-pane fade" id="Section2">
              {{--<form class="form-horizontal">--}}
              {{Form::open([
              'route'=>'register',
              'method' => 'post',
              'class'=>'form-horizontal'
              ])}}
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Sign up</button>
              </div>
              {{Form::close()}}
              {{--</form>--}}
            </div>
          </div>
        </div>


      </div><!-- /.col-md-offset-3 col-md-6 -->

    </div><!-- /.row -->
  </div><!-- /.container -->

  <script type="text/javascript">
    function showHide(element_id) {
      var obj = document.getElementById(element_id);
      if (obj.style.display != 'block') {
        obj.style.display = 'block'
      }
      else obj.style.display = 'none'
    }

  </script>

@endsection()




