jQuery(function ($) {
  var $navi = $("#navi");
  var $header = $("#header");
  var transitionTime = 500; // transitionの時間

  /**
   * functions
   */

  function closeMenu() {
    $navi.css("transform", "translateX(-100%)");
    setTimeout(function () {
      $navi.hide();
    }, transitionTime);
    $header.removeClass("open");
  }

  function openMenu() {
    $navi.show();
    // displayをblockにした後に、transformを変更する
    setTimeout(function () {
      $navi.css("transform", "translateX(0)");
    }, 0);
    $header.addClass("open");
  }

  $(".toggle_btn").on("click", function () {
    if ($header.hasClass("open")) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // メニュー内のリンクがクリックされたときにメニューを閉じる
  $navi.find("a").on("click", function (event) {
    var href = $(this).attr("href");
    var splitHref = href.split("#");
    var isTopPage = window.location.pathname == "/";

    // リンク先がページ内リンクで、現在のページがトップページの場合
    if (splitHref.length > 1 && isTopPage) {
      var id = splitHref[splitHref.length - 1];
      var target = $("#" + id);
      if (target.length) {
        event.preventDefault(); // デフォルトのクリックイベントをキャンセル
        var position = target.offset().top; // リンク先要素の位置を取得
        $("body, html").animate({ scrollTop: position }, 500, "swing"); // スムーズスクロール
        closeMenu(); // メニューを閉じる
      }
    } else {
      closeMenu(); // メニューを閉じる
    }
  });

  $("#mask, #navi a").on("click", function () {
    closeMenu();
  });
});
