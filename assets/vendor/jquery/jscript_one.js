// slide image
$(document).ready(function () {
  // alert("nguyen truong an");
  $(".slide-show").mouseover(function () {
    var s = $(this).attr("src");
    //alert(s);
    $("#imgView").attr("src", s);
  });
  var s = $("#slide-wrap").children();
  var l = s.length;
  var i = 0;
  setInterval(function () {
    if (i === l) i = 0;
    var p = $(s[i]).attr("src");
    $("#imgView").attr("src", p);
    i++;
  }, 1500);
  //
  $("input.input-qty").each(function () {
    var $this = $(this),
      qty = $this.parent().find(".is-form"),
      min = Number($this.attr("min")),
      max = Number($this.attr("max"));
    if (min == 0) {
      var d = 0;
    } else d = min;
    $(qty).on("click", function () {
      if ($(this).hasClass("minus")) {
        if (d > min) d += -1;
      } else if ($(this).hasClass("plus")) {
        var x = Number($this.val()) + 1;
        if (x <= max) d += 1;
      }
      $this.attr("value", d).val(d);
    });
  });

  //
  $("#myModal").on("shown.bs.modal", function () {
    $("#myInput").trigger("focus");
  });
  //
  $(".carousel").carousel({
    interval: 1000,
  });

  $(".owl-carousel").owlCarousel({
    loop: true,
    items: 5,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
  });

  function startTimer(duration, display) {
    var timer = duration,
      hours,
      minutes,
      seconds;
    setInterval(function () {
      hours = parseInt(timer / 3600, 10);
      minutes = parseInt((timer % 3600) / 60, 10);
      seconds = parseInt(timer % 60, 10);

      hours = hours < 10 ? "0" + hours : hours;
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = hours + ":" + minutes + ":" + seconds;

      if (--timer < 0) {
        timer = duration;
      }
    }, 1000);
  }

  window.onload = function () {
    var fiveMinutes = 60 * 60,
      display = document.querySelector("#time");
    startTimer(fiveMinutes, display);
  };
});
