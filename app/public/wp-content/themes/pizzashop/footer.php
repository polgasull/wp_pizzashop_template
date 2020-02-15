  <footer class="site-footer">
    <?php 
      $args = array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_class' => 'footer-nav',
        'after' => "<span class='separator'> | </span>" 
      );
      wp_nav_menu($args);
    ?>
    <div class="address">
      <p> 685 Woodstock Drive, 91731, California </p>
      <p> Telephone: 626-456-0865 </p>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>