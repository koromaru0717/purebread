<aside class="sidebar">
  <div class="category_block">
    <div class="block_title">
      <div class="en_title">Ｃａｔｅｇｏｒｙ</div>
      <div class="ja_title">カテゴリー</div>
    </div>
    <ul class="category_list">
      <?php wp_list_categories('title_li=&depth=1'); ?>
    </ul>
  </div>

  <div class="archive_block">
    <div class="block_title">
      <div class="en_title">Ａｒｃｈｉｖｅ</div>
      <div class="ja_title">アーカイブ</div>
    </div>
    <ul class="archive_list">
      <?php wp_get_archives(); ?>
    </ul>
  </div>

</aside>