<div class="archive_block">
  <div class="block_title">
    <div class="en_title">Ａｒｃｈｉｖｅ</div>
    <div class="ja_title">アーカイブ</div>
  </div>
  <ul class="archive_list">
    <?php
    $args = array(
      'type' => 'monthly',      // 月別アーカイブ
      'limit' => '',            // アーカイブ表示数の制限（空で無制限）
      'show_post_count' => true // 投稿数も表示
    );
    wp_get_archives($args);
    ?>
  </ul>
</div>