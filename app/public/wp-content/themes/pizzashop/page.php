<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

  <div class="hero" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="content-hero">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="section container">
    <main class="main-content">
      <?php the_content(); ?>
    </main>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>
