<?php

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

function theme_scripts()
{
  // リセットCSS
  wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css');

  // Font Awesome
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css');

  // テーマのCSS
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/asset/css/style.css');

  // jQuery
  wp_enqueue_script('jquery');

  // テーマのJavaScript
  wp_enqueue_script('theme-script', get_template_directory_uri() . '/asset/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');




/**
 * タイトルタグの区切り文字をエン・ダッシュから縦線に変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
  $separator = '|';
  return $separator;
}

/**
 * タイトルタグのテキストを変更する
 */
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title)
{
  if (is_home()) {
    unset($title['tagline']); // タグラインを削除
    $title['title'] = 'purebreadは、健康にもこだわったパンをお届けします'; //テキストを変更
  }
  return $title;
}

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
