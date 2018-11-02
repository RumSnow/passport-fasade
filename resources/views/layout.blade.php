<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Passport Facade</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=cyrillic" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/jquery.arcticmodal-0.3.css">
  <link rel="stylesheet" href="/css/simple.css">
  <link rel="stylesheet" href="/css/lightbox.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/sign.css">

</head>
<body>
@if(Auth::check())
  <div class="admin-wrapper">
  <div class="row">

    <div class="col-lg-8">
      <div class="adminName">
        <p>
          Привет, {{Auth::user()->name}} !
        </p>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="adminBlock d-flex">

        <div class="adminBlock__item">
          <a href="{{route('works.index')}}">Админка <i class="fa fa-user-secret" aria-hidden="true"></i></a>
        </div>

        <div class="adminBlock__item">
          <a href="{{route('signOut')}}">Выйти</a>
        </div>

      </div>
    </div>
  </div>
  </div>
@endif


<div class="wrapper">

  <header class="header" id="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="logo">
            <img src="/images/logo.jpg" alt="logo">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="feature">
            <h1 class="feature__title">Паспорт фасадов</h1>
            <h2 class="feature__about">Разработка. Согласование. Получение документов</h2>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="mainContact">
            <div class="contactInfo d-flex">
              <i class="officeContact__icon fas fa-phone"></i>
              <p class="officeContact__text">223-77-49</p>
            </div>
            <div class="contactInfo d-flex">
              <i class="officeContact__icon fas fa-mobile-alt"></i>
              <p class="officeContact__text">8-913-944-88-50</p>
            </div>
            <div class="contactInfo d-flex">
              <i class="officeContact__icon far fa-envelope"></i>
              <p class="officeContact__text">pfnsk@list.ru</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </header>

  <section class="nav" id="nav">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav>
            <ul class="menu d-flex justify-content-center">
              <li class="menu__item active">
                <a href="/">Услуги</a>
              </li>
              <li class="menu__item dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">
                  Готовые работы
                  <span class="caret"></span>
                </a>
                <ul class="addMenu dropdown-menu">
                  @foreach($categories as $category)
                    <li><a href="{{'/works/'.$category->id}}">{{$category->title}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="menu__item">
                <a href="/law">Закон</a>
              </li>
              <li class="menu__item">
                <a href="/thanks">Благодарности</a>
              </li>
              <li class="menu__item">
                <a href="/contact">Контакты</a>
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  @if(session('message404'))
  <div class="myErrors">
    <div class="alert alert-danger ">
      <ul class="">
          {{session('message404')}}
      </ul>
    </div>
  </div>
  @endif

  @yield('content')


  <section class="footer">
    <div class="footer" style="margin-top: 50px">

    </div>
  </section>
  <!-- ##### All Javascript Files ##### -->
  <script src="/js/jquery.min.js"></script>

  <!-- arcticModal -->
  <script src="/js/jquery.arcticmodal-0.3.min.js"></script>

  <!-- Bootstrap js -->
  <script src="/js/bootstrap/bootstrap.min.js"></script>

  <!-- LightBox js -->
  <script src="/js/lightbox.min.js"></script>

  <!-- Vue js -->
  {{--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>--}}

  <script src="/js/modal.js"></script>
  <script src="/js/main.js"></script>
</div>

</body>
</html>