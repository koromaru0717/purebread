<aside class="sidebar">
  <div class="category_block">
    <div class="block_title">
      <div class="en_title">Ｃａｔｅｇｏｒｙ</div>
      <div class="ja_title">カテゴリー</div>
    </div>
    <ul class="category_list">
      <?php
      wp_list_categories(array(
        'taxonomy' => 'category',
        'post_type' => 'blogtop',
        'title_li' => '',
        'depth' => 1,
        'show_count' => true,
      ));
      ?>
    </ul>
  </div>

  <div class="archive_block">
    <div class="block_title">
      <div class="en_title">Ａｒｃｈｉｖｅ</div>
      <div class="ja_title">アーカイブ</div>
    </div>
    <ul class="archive_list">
      <?php wp_get_archives(array(
        'type' => 'monthly',
        'post_type' => 'blogtop',
        'show_post_count' => 1,
        'limit' => 12,
      )); ?>
    </ul>
  </div>

</aside>