<?php get_header() ?>


  <section class="hero hero--industry-page" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
    <div class="hero--industry-page__title">
      <h1>Residential</h1>
    </div>
  </section>
  <section class="features">
    <h3 class="section-title section-title--no-p">We're here to help with all areas of the home</h3>
    <div class="container--industry">
    <?php
      $args = array(
        'numberposts'	=> -1,
        'post_type'		=> 'manzon_service',
        'meta_key'		=> '_manzon_service_type_key',
        'meta_value'	=> 'residential'
      );

      $query = new WP_Query( $args );

      while ( $query->have_posts() ) : $query->the_post(); 

      ?>
      <div class="feature--detail">
        <h4 class="feature__title accent--res"><?php echo the_title() ?></h4>
        <span class="underline--feature"></span>
        <p><?php echo the_content() ?></p>
      </div>

        <?php 
          endwhile;
          wp_reset_postdata();
        ?>
    </div>
  </section>
  <section class="gallery">

    <h3 class="section-title">Gallery</h3>
    <div class="gallery__container">
      <div class="gallery__residential">
        <div class="main">
        	<div class="slider slider-display">
          <?php

              $query_images_args = array(
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'post_status'    => 'inherit',
                'posts_per_page' => - 1,
              );

              $query_images = new WP_Query( $query_images_args );

              $images = array();
              foreach ( $query_images->posts as $image ) {
                if ( get_post_meta($image->ID, 'residential_gallery', false) ) {
                ?>
        	      	<div><img class="photo" data-lazy="<?php echo wp_get_attachment_url($image->ID) ?>" alt=""> </div>
                <?php
                }
              }
              wp_reset_postdata();

              ?>
        	</div>

        	<div class="slider slider-nav">
          <?php

            $query_images_args = array(
              'post_type'      => 'attachment',
              'post_mime_type' => 'image',
              'post_status'    => 'inherit',
              'posts_per_page' => - 1,
            );

            $query_images = new WP_Query( $query_images_args );

            $images = array();
            foreach ( $query_images->posts as $image ) {
              if ( get_post_meta($image->ID, 'residential_gallery', false) ) {
              ?>
            		<div><img class="nav" data-lazy="<?php echo wp_get_attachment_url($image->ID) ?>" alt=""> </div>
              <?php
              }
            }

            wp_reset_postdata();
            ?>
        	</div>
        </div>
      </div>
    </div>
  </section>
  <section class="call-to-action">
    <h3 class="section-title section-title--no-p">Our work is guaranteed and done with pride. Contact us today!</h3>
    <a class="btn" href="<?php echo get_site_url() . '/contact/' ?>">Contact Us</a>
  </section>

<?php get_footer() ?>
