jQuery(function ($) {
  $(".toggle_btn").on("click", function () {
    if ($("#header").hasClass("open")) {
      $("#navi").css("transform", "translateX(-100%)");
      setTimeout(function () {
        $("#navi").css("display", "none");
      }, 500); // transitionの時間と同じにする
      $("#header").removeClass("open");
    } else {
      $("#navi").css("display", "block");
      // displayをblockにした後に、transformを変更する
      setTimeout(function () {
        $("#navi").css("transform", "translateX(0)");
      }, 0);
      $("#header").addClass("open");
    }
  });

  $("#mask").on("click", function () {
    $("#navi").css("transform", "translateX(-100%)");
    setTimeout(function () {
      $("#navi").css("display", "none");
    }, 500); // transitionの時間と同じにする
    $("#header").removeClass("open");
  });
});
