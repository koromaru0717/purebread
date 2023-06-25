<?php get_header(); ?>

<section class="title-view">
  <div class="page_text">
    <h1>ＢＬＯＧ＆ＩＮＦＯ</h1>　
    <p>ブログ・お知らせ</p>
  </div>
</section>

<main id="main" class="wrapper">
  <section class="latest_section">
    <!-- 最新の投稿を表示 -->
    <?php get_template_part('template-parts/loop', 'blog'); ?>
  </section>

  <section class="topics_area">
  <!-- その他の投稿を表示 -->
  <?php if (have_posts()) : the_post(); /* 最新の投稿をスキップ */ endif; ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/loop', 'blog'); ?>
  <?php endwhile; ?>
</section>

  <section class="page_navigation">
    <!-- ページネーション --> 
    <?php the_posts_pagination(); ?>
  </section>
</main>

<?php get_footer(); ?>
