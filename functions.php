<?php

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

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


function the_nav_title_max_length($length, $title = null)
{
  if ($title === null) {
    $title = get_the_title();
  }
  if (mb_strlen($title) > $length) {
    $title = mb_substr($title, 0, $length);
    $title = $title . '...';
  }
  return $title;
}


/**
 * ブログ投稿タイプにカテゴリーとタグを追加
 * 
 */
function add_categories_and_tags_to_cpt()
{
  register_taxonomy_for_object_type('category', 'blogtop');
  register_taxonomy_for_object_type('post_tag', 'blogtop');
}
add_action('init', 'add_categories_and_tags_to_cpt');

/**
 * ブログトップページは最新記事＋15件を取得する
 * 
 */
function modify_main_query($query)
{
  if (!is_admin() && $query->is_main_query()) {
    if (is_post_type_archive('blogtop')) {
      $query->set('posts_per_page', 16);
    }
  }
}
add_action('pre_get_posts', 'modify_main_query');

/**
 * 日付アーカイブページのテンプレートを変更
 */
function custom_template_include($template)
{
  if (is_post_type_archive('blogtop') && is_date()) {
    $custom_template = locate_template('date.php');
    if (!empty($custom_template)) {
      return $custom_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include');

/**
 * カテゴリー検索を適応する
 */
function include_blogtop_in_category($query)
{
  if ($query->is_category() && $query->is_main_query()) {
    $query->set('post_type', array('post', 'blogtop'));
  }
  return $query;
}
add_filter('pre_get_posts', 'include_blogtop_in_category');
