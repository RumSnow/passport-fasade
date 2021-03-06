@extends('layout')

@section('content')

  <!-- Start main content -->

  <section class="content" id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="service">
            <p class="whiteBackground service__about">
              Организация ООО "Паспорт фасадов" создана исключительно для разработки, согласования и получения паспортов
              фасадов зданий. Каждый специалист организации имеет значительный опыт и разбирается во всех тонкостях
              подготовки документации, благодаря чему достигается высокое качество работ в короткие сроки. Мы оформим
              для вас паспорт фасадов "под ключ" за оптимальную стоимость и сроки.
            </p>

          </div>
        </div>
        <div class="col-lg-6 ml-auto">
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


  @include('footer')


@endsection