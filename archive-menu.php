<?php get_header(); ?>

<section class="title-view">
  <div class="page_text">
    <h1>MENU</h1>　
    <p>メニュー</p>
  </div>
</section>

<main id="main" class="wrapper">

  <?php
  // カスタム投稿タイプのタクソノミーを指定
  $taxonomy = 'menu2';

  // タクソノミーのターム（カテゴリー）を取得
  $terms = get_terms($taxonomy);

  // 各ターム（カテゴリー）ごとにループ
  foreach ($terms as $term) :
    // タームのスラッグを取得
    $term_slug = $term->slug;

    // タームに属する投稿を取得
    $args = array(
      'post_type' => get_post_type(),
      'tax_query' => array(
        array(
          'taxonomy' => $taxonomy,
          'field' => 'slug',
          'terms' => $term_slug,
        ),
      ),
    );
    $query = new WP_Query($args);
  ?>

    <section class="menu_section">
      <h2 class="menu_list_title light_font"><?php echo $term->name; ?></h2>

      <div class="menus">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <?php get_template_part('template-parts/loop', 'menu'); ?>
        <?php endwhile; ?>
      </div>

    </section>

  <?php
    // ループ後のクエリをリセット
    wp_reset_postdata();
  endforeach;
  ?>

</main>

<?php get_footer(); ?>