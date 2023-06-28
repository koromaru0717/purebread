<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header" class="wrapper">
    <h1 class="site-title">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/logo.png" alt="purebread-logo"></a>
    </h1>

    <nav id="navi">
      <ul class="nav-menu">
        <li><a href="<?php echo home_url(); ?>">
            <p class="navi-title">ＴＯＰ　ＰＡＧＥ</p>
            <p class="navi-sub-title">トップ</p>
          </a></li>
        <li><a href="<?php echo get_post_type_archive_link('menu'); ?>">
            <p class="navi-title">ＭＥＮＵ</p>
            <p class="navi-sub-title">メニュー</p>
          </a></li>
        <li><a href="<?php echo get_post_type_archive_link('blogtop'); ?>">
            <p class="navi-title">ＢＬＯＧ＆ＩＮＦＯ</p>
            <p class="navi-sub-title">ブログ・お知らせ</p>
          </a></li>
        <li><a href="<?php echo home_url(); ?>/#access">
            <p class="navi-title">ＡＣＣＥＳＳ</p>
            <p class="navi-sub-title">アクセス</p>
          </a></li>
        <li class="sns-icons">
          <a href="https://www.facebook.com/facebook/?brand_redir=103274306376166"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/facebook-icon.png" alt="Facebook"></a>
          <a href="https://twitter.com/twitterjp?lang=ja"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/twitter-icon.png" alt="Twitter"></a>
          <a href="https://www.instagram.com/instagram/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/instagram-icon.png" alt="Instagram"></a>
          <a href="https://line.me/ja/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/line-icon.png" alt="LINE"></a>
        </li>
      </ul>
    </nav>

    <div class="toggle_btn">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div id="mask"></div>
  </header>