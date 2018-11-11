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

  window.onload = function() {
    window.setInterval(function() {
      var monthNames = [ "Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря" ];
      var dayNames= ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"]

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
    }, setTimeout("clock()", 1000))
  }

});

// window.onload = function() {
//   window.setInterval(function () {
//     var now = new Date();
//     var clock = document.getElementById("clock");
//     clock.innerHTML = now.toLocaleTimeString();
//   }, 1000);
// };

