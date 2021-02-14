<?php wp_footer(); ?>


<footer class="site-footer clearfix">
    <div class="container">
      <div class="col-3">
        <h2>Manzon Development</h2>
      </div>
      <div class="col-3">
        <h3>Sections</h3>
        <ul class="unstyled-list">
          <li><a href="<?php echo get_site_url() . '/residential/' ?>">Residential</a> </li>
          <li><a href="<?php echo get_site_url() . '/commercial/' ?>">Commercial</a> </li>
          <!-- <li><a href="commercial.html">For Property Managers</a></li> -->
        </ul>
      </div>
      <div class="col-3">
        <h3>Learn more</h3>
        <ul class="unstyled-list">
          <li><a href="<?php echo get_site_url() . '/about/' ?>">About</a> </li>
          <li><a href="<?php echo get_site_url() . '/about/#reviews' ?>">Reviews</a> </li>
          <li><a href="<?php echo get_site_url() . '/contact/' ?>">Contact</a> </li>
        </ul>
      </div>
      <div class="col-3">
        <h3>Connect with us</h3>
        <ul class="unstyled-list">
        </ul>
        <ul class="social-icons unstyled-list">
          <li><a href="<?php echo esc_attr(get_option('facebook_link')); ?>"><i class="fab fa-facebook"></i></a> </li>
          <li><a href="<?php echo esc_attr(get_option('instagram_link')); ?>"><i class="fab fa-instagram"></i></a> </li>
          <li><a href="<?php echo esc_attr(get_option('google_link')); ?>"><i class="fab fa-google"></i></a> </li>
        </ul>
      </div>

    </div>
  </footer>

  <!-- <script src="temp/js/App.js" charset="utf-8"></script> -->
</body>

</html>