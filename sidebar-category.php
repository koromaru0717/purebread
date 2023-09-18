<div class="category_block">
  <div class="block_title">
    <div class="en_title">Ｃａｔｅｇｏｒｙ</div>
    <div class="ja_title">カテゴリー</div>
  </div>
  <ul class="category_list">
    <?php
    $args = array(
      'title_li'  => '', // タイトルを非表示にする
      'show_count' => true, // 投稿数を表示
      'depth' => 1, // 階層をどれだけ表示するか
    );
    wp_list_categories($args);
    ?>
  </ul>
</div>