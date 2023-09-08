<?php get_header(); ?>
<?php if (have_posts()) :
  while (have_posts()) : the_post(); ?>

    <section class="title-view">
      <div class="page_text">
        <h1><?php echo strtoupper($post->post_name); ?></h1>
        <p><?php the_title(); ?></>
      </div>
    </section>

    <main id="main" class="wrapper">
      <?php the_content(); ?>
    </main>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>