<?php get_header(); ?>
<!-- セクションは共通のため、ヘッダー配下に移動 -->
<section class="title-view">
  <div class="page_text">
    <h1><?php echo strtoupper($post->post_name); ?></h1>
    <p><?php the_title(); ?></>
  </div>
</section>

<main id="main" class="wrapper">
<!-- スラッグを取得して、blogページかそれ以外かを分岐させる -->
<?php
  // 現在のページのスラッグを取得
  global $post;
  $post_slug = $post->post_name; ?>
  <?php if ($post_slug === 'blog') {
    get_template_part('blog-parts/blog', 'top');
  } else {
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
  } ?>
</main>


<?php get_footer(); ?>