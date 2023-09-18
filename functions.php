<?php

// アイキャッチを有効にする
add_theme_support('post-thumbnails');


/**
 * 記事タイトルの最大文字数を制限
 */
function the_title_max_length($length)
{
  $title = get_the_title();
  if (mb_strlen($title) > $length) {
    $title = mb_substr($title, 0, $length);
    $title = $title . '...';
  }
  echo $title;
}
