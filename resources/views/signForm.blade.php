<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="/css/sign.css">
</head>
<body>
<div class="container background-sign">
  <div class="row">
    <div class="col-md-12">

      <div class="tab" role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab"
                                                    data-toggle="tab">sign in</a></li>
          <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">sign up</a>
          </li>
        </ul>
        <!-- Show Errors -->
        <div class="tab-content tabs">
          @if(session('errorSign') || $errors->any())
            @include('admin.errors')
          @endif

          <div role="tabpanel" class="tab-pane fade in active" id="Section1">
            {{--<form class="form-horizontal">--}}
            {{Form::open([
            'route' => 'signIn',
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
              <div class="main-checkbox">
                <input value="None" id="checkbox1" name="check" type="checkbox">
                <label for="checkbox1"></label>
              </div>
              <span class="text">Keep me Signed in</span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default">Sign in</button>
            </div>
            <div class="form-group">
              <a href="{{route('/')}}" class="buttonBack">Вернуться на сайт</a>
            </div>
            <div class="form-group forgot-pass">
              <button type="submit" class="btn btn-default">forgot password</button>
            </div>
            {{Form::close()}}
            {{--</form>--}}
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>





