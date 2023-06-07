<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name') ?></title>
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/styles.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
</head>

<body>
  <header class="header">
    <div class="header_inner">
      <div class="header_logo">
        <h1>
          <a href="<?php echo home_url();?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo@2x.png" alt="BISTRO CALME">
          </a>
        </h1>
      </div>

      <div class="header_desc">
        <?php echo bloginfo('description') ?>
      </div>

      <!-- <form class="header_search">
        <input type="text" placeholder="キーワードを入力">
        <i class="fas fa-search"></i>
      </form> -->
    </div>

    <div class="header_links">
      <nav class="gnav">
        <ul class="">
          <li><a href="#">HOME</a></li>
          <li><a href="#">わたしたちについて</a></li>
          <li><a href="#">アクセス</a></li>
          <li><a href="#">最新情報</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </nav>

      <ul class="header_sns">
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      </ul>
    </div>

    <svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
      <defs>
        <clipPath id="clip-path">
          <rect width="30" height="30" fill="none" />
        </clipPath>
      </defs>
      <g clip-path="url(#clip-path)">
        <rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)" />
        <rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)" />
        <rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)" />
      </g>
    </svg>
  </header>

  <div class="jumbotron">
    <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/jumbotron-1@2x.jpg')"></div>
    <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/jumbotron-2@2x.jpg')"></div>
    <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/jumbotron-3@2x.jpg')"></div>
  </div>

  <section class="sec">
    <div class="container">
      <header class="sec_header">
        <h2 class="title">最新情報<span>NEWS</span></h2>
      </header>

      <div class="row">
        <div class="col-md-4">
          <article class="news">
            <div class="news_pic">
              <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/news_img-1.jpg" alt="">
              </a>
            </div>
            <div class="news_meta">
              <ul class="post-categories">
                <li><a href="#">お知らせ</a></li>
              </ul>
              <time class="news_time" datetime="2019-00-00">2019年00月00日</time>
            </div>
            <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
            <div class="news_desc">
              <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
              <p><a href="#">[続きを読む]</a></p>
            </div>
          </article>
        </div>

        <div class="col-md-4">
          <article class="news">
            <div class="news_pic">
              <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/news_img-2.jpg" alt="">
              </a>
            </div>
            <div class="news_meta">
              <ul class="post-categories">
                <li><a href="#">お知らせ</a></li>
              </ul>
              <time class="news_time" datetime="2019-00-00">2019年00月00日</time>
            </div>
            <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
            <div class="news_desc">
              <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
              <p><a href="#">[続きを読む]</a></p>
            </div>
          </article>
        </div>

        <div class="col-md-4">
          <article class="news">
            <div class="news_pic">
              <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/news_img-3.jpg" alt="">
              </a>
            </div>
            <div class="news_meta">
              <ul class="post-categories">
                <li><a href="#">お知らせ</a></li>
              </ul>
              <time class="news_time" datetime="2019-00-00">2019年00月00日</time>
            </div>
            <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
            <div class="news_desc">
              <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
              <p><a href="#">[続きを読む]</a></p>
            </div>
          </article>
        </div>
      </div>

      <p class="sec_btn">
        <a href="" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
      </p>

    </div>
  </section>

  <section class="sec bg-gray">
    <div class="container">
      <header class="sec_header">
        <h2 class="title">店舗情報<span>INFORMATION</span></h2>
      </header>

      <div class="row">
        <div class="col-md-6">
          <a href="#" class="bnr" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/bnr_about@2x.jpg')">
            <div class="bnr_inner">
              わたしたちについて<span>ABOUT</span>
            </div>
          </a>
        </div>

        <div class="col-md-6">
          <a href="#" class="bnr" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/bnr_access@2x.jpg')">
            <div class="bnr_inner">
              アクセス<span>ACCESS</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="sec sec-bg">
    <div class="sec_inner">
      <header class="sec_header">
        <h2 class="title">お問い合わせ<span>CONTACT</span></h2>
      </header>

      <div class="sec_body contact">
        <div class="contact_icon">
          <i class="fas fa-phone"></i>
        </div>
        <div class="contact_body">
          <p>
            お気軽にお問い合わせください
            <span>03-1234-5678</span>
          </p>
        </div>
      </div>

      <div class="sec_btn">
        <a href="" class="btn btn-default">メールフォーム<i class="fas fa-angle-right"></i></a>
      </div>
    </div>
  </section>

  <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

  <footer class="footer">
    <div class="container">
      <div class="footer_inner">
        <nav>
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">わたしたちについて</a></li>
            <li><a href="#">アクセス</a></li>
            <li><a href="#">最新情報</a></li>
            <li><a href="#">お問い合わせ</a></li>
          </ul>
        </nav>
        <div class="footer_copyright">
          <small>&copy; BISTRO CALME All rights reserved.</small>
        </div>
      </div>
    </div>
  </footer>

  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/home.js"></script>

</body>

</html>