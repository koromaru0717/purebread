<section id="access">
  <div class="wrapper menuwrapper">
    <h2 class="secTitle">
      ＡＣＣＥＳＳ
    </h2>
    <!-- メニュー -->
    <div class="access_block">
      <div class="left-menu accescc_texts">
        <ul>
          <li>purebread</li>
          <li>〒１２３−４５６７</li>
          <li>東京都江東区白河１丁目</li>
          <li>TEL　0123-45-6789</li>
          <li>MAIL　info@purebread.com</li>
          <li>営業時間/9:00〜16:00（売り切れ次第終了）</li>
          <li>定休日/月・火</li>
          <li>東京メトロ半蔵門線清澄白河駅　徒歩１０分</li>
          <li>駐車場 5台有</li>
        </ul>
      </div>
      <div class="right-menu">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.1917722940501!2d139.79901696983646!3d35.68273655269145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018893d95778905%3A0x69d04e939397b93!2z44CSMTM1LTAwMjEg5p2x5Lqs6YO95rGf5p2x5Yy655m95rKz77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1687035621717!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="access_map"></iframe>
      </div>
    </div>
  </div>
</section>

<footer id="footer">
  <div class="wrapper footer_menu">
    <h1 class="site-title footer_logo">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/logo.png" alt="purebread-logo"></a>
    </h1>
    <div class="site_area">
      <ul class="site_map_area">
        <li><a href="<?php echo home_url(); ?>">ＴＯＰ　ＰＡＧＥ</a></li>
        <li><a href="<?php echo get_post_type_archive_link('menu'); ?>">ＭＥＮＵ</a></li>
        <li><a href="<?php echo get_post_type_archive_link('blogtop'); ?>">ＢＬＯＧ＆ＩＮＦＯ</a></li>
        <li><a href="<?php echo home_url(); ?>/#access">ＡＣＣＥＳＳ</a></li>
      </ul>
      <ul class="sns_area">
        <li class="sns-icons">
          <a href="https://www.facebook.com/facebook/?brand_redir=103274306376166"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/facebook-icon.png" alt="Facebook"></a>
          <a href="https://twitter.com/twitterjp?lang=ja"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/twitter-icon.png" alt="Twitter"></a>
          <a href="https://www.instagram.com/instagram/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/instagram-icon.png" alt="Instagram"></a>
          <a href="https://line.me/ja/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/line-icon.png" alt="LINE"></a>
        </li>
      </ul>

    </div>
  </div>
  <div class="copyright">
    <p>Copyright(C) purebread</p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>