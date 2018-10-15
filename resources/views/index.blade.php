@extends('layout')

@section('content')

  <!-- ##### Header Area Start ##### -->
  {{--<header class="header-area">--}}

  {{--<!-- Top Header Area -->--}}
  {{--<div class="top-header-area">--}}
  {{--<div class="container">--}}
  {{--<div class="row">--}}
  {{--<div class="col-12">--}}
  {{--<div class="top-header-content d-flex align-items-center justify-content-between">--}}
  {{--<!-- Breaking News Area -->--}}
  {{--<div class="top-breaking-news-area">--}}
  {{--<div id="breakingNewsTicker" class="ticker">--}}
  {{--<ul>--}}
  {{--<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>--}}
  {{--<li><a href="#">Welcome to Colorlib Family.</a></li>--}}
  {{--<li><a href="#">Nam eu metus sitsit amet, consec!</a></li>--}}
  {{--</ul>--}}
  {{--</div>--}}
  {{--</div>--}}

  {{--<!-- Social Info Area-->--}}
  {{--<div class="top-social-info-area">--}}
  {{--<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>--}}
  {{--<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>--}}
  {{--<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
  {{--<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}

  {{--<!-- Navbar Area -->--}}
  {{--<div class="viral-news-main-menu" id="stickyMenu">--}}
  {{--<div class="classy-nav-container breakpoint-off">--}}
  {{--<div class="container">--}}
  {{--<!-- Menu -->--}}
  {{--<nav class="classy-navbar justify-content-between" id="viralnewsNav">--}}

  {{--<!-- Logo -->--}}
  {{--<a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>--}}

  {{--<!-- Navbar Toggler -->--}}
  {{--<div class="classy-navbar-toggler">--}}
  {{--<span class="navbarToggler"><span></span><span></span><span></span></span>--}}
  {{--</div>--}}

  {{--<!-- Menu -->--}}
  {{--<div class="classy-menu">--}}

  {{--<!-- close btn -->--}}
  {{--<div class="classycloseIcon">--}}
  {{--<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>--}}
  {{--</div>--}}

  {{--<!-- Nav Start -->--}}
  {{--<div class="classynav">--}}
  {{--<ul>--}}
  {{--<li class="active"><a href="catagory.html">Top 10</a></li>--}}
  {{--<li><a href="#">Pages</a>--}}
  {{--<ul class="dropdown">--}}
  {{--<li><a href="index.html">Home</a></li>--}}
  {{--<li><a href="catagory.html">Catagories</a></li>--}}
  {{--<li><a href="single-post.html">Single Article</a></li>--}}
  {{--<li><a href="quize-article.html">Quize Article</a></li>--}}
  {{--<li><a href="contact.html">Contact</a></li>--}}
  {{--<li><a href="#">Dropdown</a>--}}
  {{--<ul class="dropdown">--}}
  {{--<li><a href="index.html">Home</a></li>--}}
  {{--<li><a href="catagory.html">Catagories</a></li>--}}
  {{--<li><a href="single-post.html">Single Article</a></li>--}}
  {{--<li><a href="quize-article.html">Quize Article</a></li>--}}
  {{--<li><a href="contact.html">Contact</a></li>--}}
  {{--</ul>--}}
  {{--</li>--}}
  {{--</ul>--}}
  {{--</li>--}}
  {{--<li><a href="index.html">Funny</a></li>--}}
  {{--<li><a href="index.html">Videos</a></li>--}}
  {{--<li><a href="index.html">Don’t Miss</a></li>--}}
  {{--<li><a href="#">Mega Menu</a>--}}
  {{--<div class="megamenu">--}}
  {{--<ul class="single-mega cn-col-4">--}}
  {{--<li><a href="index.html">Home</a></li>--}}
  {{--<li><a href="catagory.html">Catagories</a></li>--}}
  {{--<li><a href="single-post.html">Single Article</a></li>--}}
  {{--<li><a href="quize-article.html">Quize Article</a></li>--}}
  {{--<li><a href="contact.html">Contact</a></li>--}}
  {{--</ul>--}}
  {{--<ul class="single-mega cn-col-4">--}}
  {{--<li><a href="index.html">Home</a></li>--}}
  {{--<li><a href="catagory.html">Catagories</a></li>--}}
  {{--<li><a href="single-post.html">Single Article</a></li>--}}
  {{--<li><a href="quize-article.html">Quize Article</a></li>--}}
  {{--<li><a href="contact.html">Contact</a></li>--}}
  {{--</ul>--}}
  {{--<ul class="single-mega cn-col-4">--}}
  {{--<li><a href="index.html">Home</a></li>--}}
  {{--<li><a href="catagory.html">Catagories</a></li>--}}
  {{--<li><a href="single-post.html">Single Article</a></li>--}}
  {{--<li><a href="quize-article.html">Quize Article</a></li>--}}
  {{--<li><a href="contact.html">Contact</a></li>--}}
  {{--</ul>--}}
  {{--<ul class="single-mega cn-col-4">--}}
  {{--<li><a href="index.html">Home</a></li>--}}
  {{--<li><a href="catagory.html">Catagories</a></li>--}}
  {{--<li><a href="single-post.html">Single Article</a></li>--}}
  {{--<li><a href="quize-article.html">Quize Article</a></li>--}}
  {{--<li><a href="contact.html">Contact</a></li>--}}
  {{--</ul>--}}
  {{--</div>--}}
  {{--</li>--}}
  {{--</ul>--}}

  {{--<!-- Search Button -->--}}
  {{--<div class="search-btn">--}}
  {{--<i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>--}}
  {{--</div>--}}

  {{--<!-- Search Form -->--}}
  {{--<div class="viral-search-form">--}}
  {{--<form id="search" action="#" method="get">--}}
  {{--<input type="text" name="search-terms" placeholder="Enter your keywords ...">--}}
  {{--<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
  {{--</form>--}}
  {{--</div>--}}

  {{--<!-- Video Post Button -->--}}
  {{--<div class="add-post-button">--}}
  {{--<a href="#" class="btn add-post-btn">Add Post</a>--}}
  {{--</div>--}}

  {{--</div>--}}
  {{--<!-- Nav End -->--}}
  {{--</div>--}}
  {{--</nav>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</header>--}}
  <!-- ##### Header Area End ##### -->

  <!-- ##### Welcome Slide Area Start ##### -->

  <!-- Start main content -->

  <section class="content" id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="service">
            <p class="whiteBackground service__about">
              Организация ООО "Паспорт фасадов" создана исключительно для разработки, согласования и получения паспортов
              фасадов зданий. Каждый специалист организации имеет значительный опыт и разбирается во всех тонкостях
              подготовки документации, благодаря чему достигается высокое качество работ в короткие сроки. Мы оформим
              для вас паспорт фасадов "под ключ" за оптимальную стоимость и сроки.
            </p>

          </div>
        </div>
        <div class="col-lg-5 ml-auto">
          <div class="whiteBackground service">
            <h3 class="ourService__offer">Предоставляемые услуги</h3>
            <ul>
              <li>Выполнение всей необходимой архитектурной документации.</li>
              <li>Согласование всего пакета документов в Мэрии г.Новосибирска</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 m-auto">
          <div class="whiteBackground special">
            <h3 class="special__title">Что такое паспорт фасадов здания?</h3>
            <p class="special__content">В целях формирования архитектурного облика города Новосибирска, в соответствии с
              <a href="#">ФЗ от 06.10.2003 № 131</a>, постановлением мэрии г. Новосибирска №7762 от 16.08.2013 (с изм.
              на 24.02.2016 г) и решением Совета депутатов г. Новосибирска "О правилах благоустройства территории г.
              Новосибирска №3656 от 01.08.2017 г) <b>каждый собственник здания или сооружения обязан иметь согласованный
                паспорт фасадов здания</b>.</p>


            <p class="special__content" style=" font-style: italic;"> Паспорт фасадов здания – это официальный документ,
              который содержит подробную информацию обо всех фасадах здания, включая их технические, колористические и
              другие характеристики. Так же в паспорте фасада здания отображаются инженерное оборудование (наружные
              блоки кондиционеров, наружные элементы вентиляции, антенны, видеокамеры, оборудование подсветки здания и
              пр), наружная реклама, информационные таблички, знаки адресации и пр. Паспорт фасадов изготавливается и
              проверяется в соответствии с правилами по проектированию зданий и сооружений, а также государственными
              стандартами.</p>

            <p class="special__content"><strong>Паспорт фасадов здания согласовывается с:</strong></p>
            <ul type="circle" class="special__content">
              <li>отделом архитектуры и строительства администрации района (округа по районам) города Новосибирска;</li>
              <li>начальником управления дизайна городской среды мэрии города Новосибирска – главным художником
                города;
              </li>
              <li>главным архитектором города (при необходимости);</li>
              <li>уполномоченным органом в области сохранения, использования, популяризации и государственной охраны
                объектов культурного наследия (в случае, если объект является объектом культурного наследия)
              </li>
            </ul>


            <p class="special__content">После изготовления и согласования один экземпляр остаётся в архиве Главного управления архитектуры и
            градостроительства мэрии города Новосибирска, а второй экземпляр выдаётся лицу заказавшему паспорт фасадов.</p>

            <p class="special__content">В паспорте фасада отражаются любые изменения фасада, связанные с заменой или устройством отдельных его
            деталей или элементов, дополнительного оборудования, изменения, связанные с размещением на фасаде рекламной
            или информационной конструкции, изменением цвета. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End main content -->



@endsection