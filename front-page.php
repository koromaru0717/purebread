<?php get_header(); ?>

<section id="first-view">
</section>

<section id="about">
  <h2 class="secTitle">
    ＡＢＯＵＴ
  </h2>
  <div class="wrapper aboutwrapper">
    <div class="text-alia">
      <p class="secSubTitle">自然の恵みを活かしたパンで<br>あなたの一日をより豊かに</p>
      <p class="secText">
        私たちは、厳選されたオーガニックの新鮮な材料と職人の熟練した技術を活かし、一つ一つのパンを手作りで丁寧に焼き上げています。朝食にぴったりのナチュラルなパンから、ランチに楽しむための特別なパンまで、私たちのパンがあなたのライフスタイルに新鮮な風をお届けします。
      </p>
    </div>
    <div class="btn_area">
      <a href=<?php echo esc_url(home_url('/about/')); ?> class="btn">more</a>
    </div>
  </div>
</section>

<section id="blogInfo">
  <div class="wrapper blogInfowrapper">
    <h2 class="secTitle">
      ＢLＯＧ＆ＩＮＦＯ
    </h2>
    <!-- posts_block -->
    <div class="posts_block">
      <?php
      $args = array(
        'post_type' => 'post',      // 投稿タイプを指定
        'posts_per_page' => 4,      // 表示する記事数を指定
        'orderby' => 'date',        // 日付で記事を並び替え
        'order' => 'DESC',          // 降順で並び替え
      );

      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>
          <div class="post_block">
            <a href="<?php echo get_permalink(); ?>" class="link_box top_link_box">
              <div class="img_wrap">
                <div class="box_img">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              </div>
              <div class="textbox">
                <div class="post_data"><?php echo get_the_date('Y.m.d'); ?></div>
                <div class="post_title"><?php echo get_the_title(); ?></div>
              </div>
            </a>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '記事がありません。';
      endif;
      ?>
    </div>
    <!-- / posts_block -->

    <!-- btn_area -->
    <div class="btn_area">
      <a href=<?php echo esc_url(home_url('/blog/')); ?> class="btn">more</a>
    </div>
    <!-- /btn_area -->
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
            <a href=<?php echo esc_url(home_url('/menu/')); ?>>
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuL.png">
              </div>
            </a>
          </div>
        </div>
        <div class="wrap_col2">
          <div class="box">
            <a href=<?php echo esc_url(home_url('/menu/')); ?>>
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuS.png">
              </div>
            </a>
          </div>
          <div class="box">
            <a href=<?php echo esc_url(home_url('/menu/')); ?>>
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
            <a href=<?php echo esc_url(home_url('/menu/')); ?>>
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuS.png">
              </div>
            </a>
          </div>
          <div class="box">
            <a href=<?php echo esc_url(home_url('/menu/')); ?>>
              <div class="img_box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/top/menuS.png">
              </div>
            </a>
          </div>
        </div>
        <div class="box-wrap">
          <div class="box">
            <a href=<?php echo esc_url(home_url('/menu/')); ?>>
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
      <a href=<?php echo esc_url(home_url('/menu/')); ?> class="btn">more</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>