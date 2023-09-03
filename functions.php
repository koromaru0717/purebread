<?php

// アイキャッチを有効にする
add_theme_support('post-thumbnails');

// 最大文字数を制限する
function the_title_max_length($length)
{
  $title = get_the_title();
  if (mb_strlen($title) > $length) {
    $title = mb_substr($title, 0, $length);
    $title = $title . '...';
  }
  echo $title;
}
