<?php get_header(); ?>

  <?php
    $blog_page = get_option('page_for_posts');
    $image_id = get_post_thumbnail_id($blog_page);
    $image_src = wp_get_attachment_image_src($image_id, 'full')[0];
  ?>

  <div class="hero" style="background-image: url( <?php echo $image_src ?>)">
    <div class="content-hero">
      <h1><?php echo get_the_title($blog_page); ?></h1>
    </div>
  </div>

  <div class="section container with-sidebar">
    <main class="main-content">
      <?php while(have_posts()): the_post(); ?>
        <article class="blog-post">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('specialties'); ?>
          </a>
          <header class="post-info">
            <div class="date">
              <time>
                <?php echo the_time('d'); ?>
                <span><?php echo the_time('M'); ?></span>
              </time>
            </div>
            <div class="post-title">
              <h2><?php the_title(); ?></h2>
            </div>
          </header>
          <p class="author">
            Writed by:
            <span><?php the_author(); ?> </span>
          </p>
          
          <div class="post-content">
            <?php the_excerpt(); ?>

            <a class="button primary-button" href="<?php the_permalink(); ?>">
              Read more 
            </a>
          </div>
        </article>
      <?php endwhile; ?>

      <div class="pagination">
        <?php echo paginate_links() ?>
      </div>
    </main>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
