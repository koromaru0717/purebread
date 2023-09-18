<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => get_query_var('paged') <= 1 ? 16 : 15,
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  'orderby' => 'date',
  'order' => 'DESC'
);
$query = new WP_Query($args);
?>

<?php if (get_query_var('paged') <= 1 && $query->have_posts()) : $query->the_post(); ?>
  <section class="latest_section">
    <?php set_query_var('is_first_post', true); ?>
    <?php get_template_part('blog-parts/loop', 'blog'); ?>
  </section>
<?php endif; ?>

<?php $query->rewind_posts(); ?>

<section class="topics_area">
  <?php
  // 最新の投稿をスキップしたいので、フラグをセットする
  $is_first_post = true;
  if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
      if ($is_first_post) {
        $is_first_post = false;
        continue;
      }
      get_template_part('blog-parts/loop', 'blog');
    endwhile;
  endif;
  ?>
</section>

<section class="page_navigation">
  <?php
  $big = 999999999;
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $query->max_num_pages,
    'before_page_number' => '<div class="page_number">',
    'after_page_number' => '</div>',
    'prev_text' => '<div class="page_number">〈</div>',
    'next_text' => '<div class="page_number">〉</div>',
    'mid_size' => 2,
    'end_size' => 1,
  ));
  ?>
</section>

<?php wp_reset_postdata(); ?>