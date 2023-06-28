<section class="page_navigation">
  <?php
  $big = 999999999; // need an unlikely integer
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