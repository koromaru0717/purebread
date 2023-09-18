<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="SEO文言追加">
  <title>purebread</title>
  <!-- <link rel="icon" href="favicon.ico"> -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/asset/js/main.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header">
    <h1 class="site-title">
      <a href=<?php echo esc_url(home_url('/')); ?>><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/logo.png" alt="purebread"></a>
    </h1>

    <nav id="navi">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/asset/img/top/logo.png" alt="purebread">

      <div class="navi__menus">
        <ul class="pages">
          <li><a href=<?php echo esc_url(home_url('/')); ?>>
              <p class="navi-title">ＴＯＰ　ＰＡＧＥ</p>
              <p class="navi-sub-title">トップ</p>
            </a></li>
          <li><a href=<?php echo esc_url(home_url('/about/')); ?>>
              <p class="navi-title">ＡＢＯＵＴ　ＵＳ</p>
              <p class="navi-sub-title">わたしたちについて</p>
            </a></li>
          <li><a href=<?php echo esc_url(home_url('/menu/')); ?>>
              <p class="navi-title">ＭＥＮＵ</p>
              <p class="navi-sub-title">メニュー</p>
            </a></li>
          <li><a href=<?php echo esc_url(home_url('/blog/')); ?>>
              <p class="navi-title">ＢＬＯＧ＆ＩＮＦＯ</p>
              <p class="navi-sub-title">ブログ・お知らせ</p>
            </a></li>
          <li><a href=<?php echo esc_url(home_url('/#access')); ?>>
              <p class="navi-title">ＡＣＣＥＳＳ</p>
              <p class="navi-sub-title">アクセス</p>
            </a></li>
        </ul>
        <a class="btn" href=<?php echo esc_url(home_url('/contact')); ?>>お問い合わせ</a>
        <div class="sns-icons">
          <a href="https://www.facebook.com/facebook/?brand_redir=103274306376166"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/facebook-icon.png" alt="Facebook"></a>
          <a href="https://twitter.com/twitterjp?lang=ja"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/twitter-icon.png" alt="Twitter"></a>
          <a href="https://www.instagram.com/instagram/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/instagram-icon.png" alt="Instagram"></a>
          <a href="https://line.me/ja/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/line-icon.png" alt="LINE"></a>
        </div>
      </div>

    </nav>

    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>