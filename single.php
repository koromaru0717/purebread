<?php get_header(); ?>
<section class="title-view">
  <div class="page_text">
    <h1>BLOG</h1>　
    <p>ブログ</p>
  </div>
</section>

<div class="container wrapper">
  <article class="main_content">

    <div class="main_block">
      <?php while (have_posts()) : the_post(); ?>
        <header class="main_header article_header">
          <div class="meta_area">
            <ul class="cat_list">
              <li><?php the_category(', '); ?></li>
            </ul>
            <div class="post_data">
              <?php echo get_the_date('Y.m.d'); ?>
            </div>
          </div>
          <h2 class="article_title light_font"><?php the_title(); ?></h2>
        </header>

        <div class="post_content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="back_link">
      <a href="<?php home_url(); ?>/blog" class="back_btn"> <span>ブログ一覧に戻る</span></a>
    </div>

    <div class="single_navi_block">
      <!-- 次のページ -->
      <div class="left_box">
        <span class="next">
          <?php $next_post = get_next_post();
          if ($next_post) : ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" class="back-button">
              <i class="fas fa-arrow-left"></i> <?php echo $next_post->post_title; ?>
            </a>
          <?php endif; ?>
        </span>
      </div>
      <!-- 前のページ -->
      <div class="right_box">
        <span class="prev">
          <?php $prev_post = get_previous_post();
          if ($prev_post) : ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="back-button">
              <?php echo $prev_post->post_title; ?> <i class="fas fa-arrow-right"></i>
            </a>
          <?php endif; ?>
        </span>
      </div>
    </div>

  </article>

  <aside class="sidebar">
    <?php get_sidebar('category'); ?>
    <?php get_sidebar('date'); ?>
  </aside>
</div>

<?php get_footer(); ?>