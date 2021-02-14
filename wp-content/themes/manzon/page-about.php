<?php get_header(); ?>

<div class="about-page">
  <section class="service-areas call-to-action" style="background-image: url(<?php echo get_template_directory_uri() . '/src/images/downtown.jpg' ?>)">
  <div class="cover">
    <h1>About Manzon Development</h1>
    <p class="about-content">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


    </p>
    <div>
  </section>
  <section id="reviews" class="reviews--main">
    <h3 class="section-title--info">Our Reviews</h3>
    <div class="about--reviews">
    <?php
      $args = array(
          'numberposts'	=> -1,
          'post_type'		=> 'manzon_review',
      );

      $query = new WP_Query( $args );

      while ( $query->have_posts() ) : $query->the_post(); 

      ?>
        <div class="single-review">
          <q class="text--em" cite="customer name"><? echo esc_attr(the_content()) ?></q>
          </br>
        </div>

      <?php 
        endwhile;
        wp_reset_postdata();
      ?>
    </div>
    <div class="google-reviews-link">
        <a href="<?php echo esc_attr(get_option('google_reviews_link')); ?>" target="_blank" rel="noopener noreferrer">See our Google Reviews</a>
        <span class="underline underline--white"></span>
    </div>
  </div>
</section>

<section class="call-to-action">
  <h3 class="section-title">Our work is guaranteed and done with pride. Contact us today!</h3>
  <a class="btn" href="<?php echo get_site_url() . '/contact/' ?>">Contact Us</a>
</section>

<?php get_footer(); ?>