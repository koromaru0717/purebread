<div class="post_box">
  <a href="<?php the_permalink(); ?>" class="link_box">
    <div class="img_wrap">
      <div class="box_img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(array(800, 400)) ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/blogInfo/newblog.png">
        <?php endif; ?>
      </div>
    </div>
    <div class="textbox">
      <?php $is_first_post = get_query_var('is_first_post', false);
      if ($is_first_post) : ?>
        <div class="new_icon light_font">NEW</div>
        <?php
        set_query_var('is_first_post', false);
        ?>
      <?php endif; ?>
      <div class="post_data"><?php the_time('Y.m.d'); ?></div>
      <div class="post_title"><?php the_title_max_length(30); ?></div>
    </div>
  </a>
</div>