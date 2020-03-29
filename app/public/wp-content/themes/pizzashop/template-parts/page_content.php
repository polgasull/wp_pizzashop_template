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