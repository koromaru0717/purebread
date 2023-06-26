<?php get_header(); ?>

<section class="title-view">
  <div class="page_text">
    <h1>ＢＬＯＧ＆ＩＮＦＯ</h1>　
    <p>ブログ・お知らせ</p>
  </div>
</section>

<main id="main" class="wrapper">
  <?php if (get_query_var('paged') <= 1) : ?>
    <section class="latest_section">
      <!-- 最新の投稿を表示 -->
      <?php get_template_part('template-parts/loop', 'blog-latest'); ?>
    </section>
  <?php endif; ?>

  <section class="topics_area">
    <!-- その他の投稿を表示 / 最新の投稿をスキップ-->
    <?php if (have_posts()) : the_post();
    endif; ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('template-parts/loop', 'blog'); ?>
    <?php endwhile; ?>
  </section>

  <?php get_template_part('template-parts/pagination'); ?>

</main>

<?php get_footer(); ?>