<?php get_header(); ?>

<section class="title-view">
  <div class="page_text">
    <h1>BLOG</h1>　
    <p>ブログ</p>
  </div>
</section>

<main id="main" class="wrapper">
  <div class="tag_area">
    <h2 class="tag_title main_title">
      <?php the_time('Y年m月'); ?>
    </h2>
  </div>

  <section class="topics_area">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('blog-parts/loop', 'blog'); ?>
      <?php endwhile;
    else : ?>
      <p>記事がありません。</p>
    <?php endif; ?>
  </section>

  <section class="page_navigation">
    <?php
    $big = 999999999;
    echo paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $wp_query->max_num_pages,
      'before_page_number' => '<div class="page_number">',
      'after_page_number' => '</div>',
      'prev_text' => '<div class="page_number">〈</div>',
      'next_text' => '<div class="page_number">〉</div>',
      'mid_size' => 2,
      'end_size' => 1,
    ));
    ?>
  </section>


</main>

<?php get_footer(); ?>