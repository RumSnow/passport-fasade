// function look(t) {
//   p=document.getElementById(t);
//   l=document.getElementById("a-"+t);
//   if (p.style.display=="none"){
//     l.innerHTML="Скрыть";
//     p.style.display="block";
//   }else{
//     l.innerHTML="Показать";
//     p.style.display="none"
//   }
// }

$(document).ready(function () {


  $('#clickResolution').click(function () {
    var c = $('<div class="box-modal" />');
    c.html($('.b-text').html());
    c.prepend('<div class="box-modal_close arcticmodal-close">Закрыть</div>');
    $.arcticmodal({
      content: c
    });
  });


  $('.case__img').click(function () {
    lightbox.option({
      'maxWidth': 900,
      'wrapAround': true,
      'resizeDuration': 200,
    });
  });

  $('.thanks-img').click(function () {
    lightbox.option({
      'wrapAround': true,
      'maxHeight': 1000
    });
  });

});

window.setInterval(function () {
  var monthNames = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
  var dayNames = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"]

  var date = new Date();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  if (hours < 10)
    hours = "0" + hours;
  if (minutes < 10)
    minutes = "0" + minutes;
  if (seconds < 10)
    seconds = "0" + seconds;

  var str = hours + " : " + minutes + " : " + seconds;

  var clock = document.getElementById("clock");
  clock.innerHTML = str;
}, setTimeout("clock()", 1000));


ymaps.ready(init);

// здесь массив объектов
var placemarks = [
  {
    latitude: 55.076360,
    longitude: 82.952194,
    hintContent: '<div class="map__hint"> 1-й Краснодонский переулок, 9 </div>',
    balloonContent: [
      '<div class="map__ballon">',
      '<img class="map__object-img" src="/photos/no-photo.jpg" alt="Бургер" />',
      '<p>1-й Краснодонский переулок, 9</p>',
      '</div>'
    ],
  },{
    latitude: 54.991273,
    longitude: 82.877616,
    hintContent: '<div class="map__hint"> 2-й переулок Пархоменко, 15 </div>',
    balloonContent: [
      '<div class="map__ballon">',
      '<img class="map__object-img" src="/photos/no-photo.jpg" alt="Бургер" />',
      '<p>2-й переулок Пархоменко, 15</p>',
      '</div>'
    ],
  },{
    latitude: 54.991320,
    longitude: 82.878335,
    hintContent: '<div class="map__hint"> 2-й переулок Пархоменко, 15 </div>',
    balloonContent: [
      '<div class="map__ballon">',
      '<img class="map__object-img" src="/photos/no-photo.jpg" alt="Бургер" />',
      '<p>2-й переулок Пархоменко, 15</p>',
      '</div>'
    ],
  }
];

function init($data) {
  //здесь инициализировали САМУ карту
  var myMap = new ymaps.Map("map", {
    center: [55.030199, 82.920430],
    zoom: 11,
    controls: ['zoomControl', 'typeSelector', 'fullscreenControl'],
    // behaviors: ['drag']
  });

  //foreach проходит по каждому объекту {}, кот. находится внутри
  placemarks.forEach(function(obj, pnt){
    var myPlacemark = new ymaps.Placemark([obj.latitude, obj.longitude], {
      hintContent: obj.hintContent,
      balloonContent: obj.balloonContent.join(''),
    }, {
      // Здесь происходит создание объекта Точки на карте
      iconLayout: 'default#image',
      iconImageHref: '/images/map-marker.png',
      iconImageSize: [51,51],
      // iconImageOffset: [-10, -10]
    });

    myMap.geoObjects.add(myPlacemark);

  });





  listItems = [
    new ymaps.control.ListBoxItem('Новосибирск'),
    new ymaps.control.ListBoxItem('Красноярск')
  ];
  myListBox = new ymaps.control.ListBox({
    data: {
      content: 'Выбрать город'
    },
    items: listItems
  });

  myMap.controls.add(myListBox);
}

// function initMap() {
//     //Выбираем элемент по id
//   var element = document.getElementById('map');
//
//     // Создаём новый объект Параметры, для карты
//   var options = {
//     zoom: 4,
//     center: {lat:55.7558, lng:37.6173}
//   };
//
//     // Создаём новый объект Карта
//   var myMap = new google.maps.Map(element, options);
//
// }
