<?php get_header(); ?>

<section class="title-view">
  <div class="page_text">
    <h1>ＢＬＯＧ＆ＩＮＦＯ</h1>　
    <p>ブログ・お知らせ</p>
  </div>
</section>

<main id="main" class="wrapper">
  <div class="tag_area">
    <h2 class="tag_title"><?php if (is_month()) : ?>
        <h2 class="main_title"><?php the_time('Y年m月'); ?></h2>
      <?php else : ?>
        <h2 class="main_title"><?php wp_title(''); ?></h2>
      <?php endif; ?>
    </h2>
  </div>

  <section class="topics_area">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/loop', 'blog'); ?>
      <?php endwhile;
    else : ?>
      <p>記事がありません。</p>
    <?php endif; ?>
  </section>

  <?php get_template_part('template-parts/pagination'); ?>

</main>

<?php get_footer(); ?>