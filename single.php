<?php get_header(); ?>

<section class="title-view">
  <div class="page_text">
    <h1>ＢＬＯＧ＆ＩＮＦＯ</h1>　
    <p>ブログ・お知らせ</p>
  </div>
</section>

<div class="container wrapper">
  <article class="main_content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="main_block">
          <header class="main_header">
            <div class="meta_area">
              <ul class="cat_list">
                <li><?php the_category(', ') ?></li>
              </ul>
              <div class="post_data">
                <?php the_time('Y.m.d'); ?>
              </div>
            </div>
            <h2 class="article_title light_font"><?php the_title(); ?></h2>
          </header>

          <div class="post_content">
            <?php the_content(); ?>
          </div>
        </div>

        <div class="back_link">
          <a href="<?php echo get_post_type_archive_link('blogtop'); ?>" class="back_btn"> <span>ブログ一覧に戻る</span></a>
        </div>

        <div class="single_navi_block">
          <div class="left_box">
            <span class="next">
              <?php previous_post_link('%link', '<i class="fas fa-arrow-left"></i> %title'); ?>
            </span>
          </div>
          <div class="right_box">
            <span class="prev">
              <?php next_post_link('%link', '%title <i class="fas fa-arrow-right"></i>'); ?>
            </span>
          </div>
        </div>

    <?php endwhile;
    endif; ?>

  </article>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>