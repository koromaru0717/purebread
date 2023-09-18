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
  $taxonomy = 'menu_terms';

  // タームの順序を定義
  $term_order = array('seasonal', 'side-dish-bread', 'sweet-bread', 'others');

  // タームの順序に従ってループ
  foreach ($term_order as $term_slug) :
    // タームを取得
    $term = get_term_by('slug', $term_slug, $taxonomy);

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
      <h2 class="menu_list_title light_font">
        <?php echo $term->name; ?>
      </h2>

      <div class="menus">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <div class="menu">
            <div class="menu_img_area">
              <?php the_post_thumbnail('full', array('class' => 'menu_img')); ?>
            </div>
            <div class="menu_text">
              <p><?php the_title(); ?></p>
            </div>
          </div>
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