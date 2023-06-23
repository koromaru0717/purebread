<?php echo get_header(); ?>

<section id="first-view">
</section>

<section id="about">
  <div class="wrapper aboutwrapper">
    <h2 class="secTitle">
      ＡＢＯＵＴ
    </h2>
    <h3 class="secSubTitle">自然の恵みを活かしたパンで<br>あなたの一日をより豊かに</h3>
    <div class="secText">
      <p>
        私たちは、厳選されたオーガニックの新鮮な材料と職人の熟練した技術を活かし、一つ一つのパンを手作りで丁寧に焼き上げています。朝食にぴったりのナチュラルなパンから、ランチに楽しむための特別なパンまで、私たちのパンがあなたのライフスタイルに新鮮な風をお届けします。
      </p>
    </div>
  </div>
</section>

<section id="blogInfo">
  <div class="wrapper blogInfowrapper">
    <h2 class="secTitle">
      ＢLＯＧ＆ＩＮＦＯ
    </h2>
    <!-- 記事 -->
    <div class="posts_block">
      <?php
      // WP_Queryのパラメータを設定
      $args = array(
        'posts_per_page' => 3 // 最新の4つの投稿を取得
      );

      // 新しいWP_Queryインスタンスを作成
      $the_query = new WP_Query($args);

      // ループ
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>

          <div class="post_block">
            <a href="<?php the_permalink(); ?>" class="link_box top_link_box">
              <div class="img_wrap">
                <div class="box_img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/blogimg.png">
                  <?php endif; ?>
                </div>
              </div>
              <div class="textbox">
                <div class="post_data"><?php the_time('Y.m.d'); ?></div>
                <div class="post_title"><?php the_title_max_length(30); ?></div>
              </div>
            </a>
          </div>

      <?php
        endwhile;
      endif;

      // ループ後のリセット
      wp_reset_postdata();
      ?>

    </div>
    <!-- ボタン -->
    <div class="btn_area">
      <a href="/blogInfoTop.html" class="btn">more</a>
    </div>
  </div>
</section>

<section id="menu">
  <div class="wrapper menuwrapper">
    <h2 class="secTitle">
      ＭＥＮＵ　ＬＩＮＥ　ＵＰ
    </h2>
    <!-- メニュー -->
    <div class="menu_block">
      <div class="left-menu">
        <div class="box-wrap">
          <div class="box">
            <a href="./menu.html">
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuL.png">
              </div>
            </a>
          </div>
        </div>
        <div class="wrap_col2">
          <div class="box">
            <a href="./menu.html">
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuS.png">
              </div>
            </a>
          </div>
          <div class="box">
            <a href="./menu.html">
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuS.png">
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="right-menu">
        <div class="wrap_col2">
          <div class="box">
            <a href="./menu.html">
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuS.png">
              </div>
            </a>
          </div>
          <div class="box">
            <a href="./menu.html">
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuS.png">
              </div>
            </a>
          </div>
        </div>
        <div class="box-wrap">
          <div class="box">
            <a href="./menu.html">
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuL.png">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- ボタン -->
    <div class="btn_area">
      <a href="/menu.html" class="btn">more</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>