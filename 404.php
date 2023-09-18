<?php get_header(); ?>

<section class="title-view">
  <div class="page_text">
    <h1>404 NOT FOUND</h1>
    <p>お探しのページは見つかりませんでした。</>
  </div>
</section>

<div class="wrapper not_found">
  <div class="back_link">
    <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
    <a href="<?php echo home_url(); ?>" class="back_btn"> <span>トップページに戻る</span></a>
  </div>
</div>

<?php get_footer(); ?>