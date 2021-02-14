<?php 

get_header(); 
?>

<section class="hero hero--home-page">
    <div class="hero__video">
      <video loop autoplay playsinline muted id="hero-video" width='100%' height='100%' src="<?php echo get_template_directory_uri() . '/src/videos/bathroom.mp4' ?>"  type='video/mp4'></video>
      <div class="hero__text">
        <h1 class="hero__text--headline">Residential or Commercial plumbing or renovations, we've got your back!</h1>
        <p class="hero__text--description">Manzon Development is a residential & commercial service company based in Abbotsford, B.C. Dedicated to
          quality, we specialize in Residential & commercial in the Greater Vancouver Regional District.​</p>
        <div class="hero__see-more">
          <a href="#see-more" class="hero__see-more-link">See our work</a>
          <span class="underline underline--white"></span>
        </div>
      </div>


    </div>
  </section>
  <section class="intro">
    <div class="intro__text">
      <h3>The reward for work well done is the <span class="text--em">opportunity to do more</span>.</h3>
      <p class="intro__text--main">
        We have grown from honing a skilled craft, into a polished agent for client solutions. Previous projects have
        ranged from residential, multi-family residential, commercial and light industrial.
      </p>
      <p class="intro__text--main">
        No matter the scale of the job, pride goes into everything.
      </p>
    </div>
  </section>
  <section class="features">
    <h3 class="section-title section-title--padding">We do all jobs <span>-</span> big or small</h3>
    <ul class="features__container unstyled-list">
      <?php 

        $feature_taxonomies = get_terms( array(
          'taxonomy' => 'feature',
          'hide_empty' => false
        ) );

        foreach( $feature_taxonomies as $feature ) {
          ?>
            <li class="feature"><svg version="1.1" viewBox="0 0 130.2 130.2">
                <polyline class="check" points="101,39 50.2,86.9 30,64.5" /></svg>
              <p><?php echo esc_attr($feature->name) ?></p>
            </li>

          <?php

        }

      ?>
    </ul>
  </section>

  <section class="see-more">

    <h3 class="section-title section-title--no-p" id="see-more">See our Work</h3>
    <p>For <span class="text--em text--bold">image of our work</span>,
      and <span class="text--em text--bold">more information</span> about our various services, see our Residential or
      Commercial pages.
    </p>
    <div class="container--industries">
      <div style="background-image: url(<?php echo get_template_directory_uri() . '/src/images/broom.jpeg' ?>)"
        class="see-more__industry see-more__industry--residential"><a href="<?php echo get_site_url() . '/residential/' ?>"><span
            class="overline"></span>
          <h3>Residential</h3>
        </a>
      </div>
      <div style="background-image: url(<?php echo get_template_directory_uri() . '/src/images/industrial.jpeg' ?>)"
        class="see-more__industry see-more__industry--commercial"><a href="<?php echo get_site_url() . '/commercial/' ?>"><span
            class="overline"></span>
          <h3>Commercial</h3>
        </a>
      </div>
    </div>
  </section>

  <section class="property-managers">
    <h2 class="section-title section-title--no-m">Services for Property Managers</h2>

    <p>We're experienced in working directly with property managers to meet all the service needs of their properties.</p>

    <div class="see-residential-work">
      <a href="<?php echo get_site_url() . '/residential/' ?>">See our Residential Work</a>
      <span class="underline underline--white"></span>
    </div>
  </section>

  <section class="service-areas clearfix" style="background-image: url(<?php echo get_template_directory_uri() . '/src/images/downtown.jpg' ?>)">
    <div class="cover">
      <h3 class="section-title section-title--no-p">Service available throughout the Lower Mainland</h3>
      <div class="container clearfix">
        <?php 

        $area_taxonomies = get_terms( array(
          'taxonomy' => 'service_area',
          'hide_empty' => false
        ) );

        $odd_areas = array();
        $even_areas = array();
        foreach ($area_taxonomies as $k => $v) {
            if ($k % 2 == 0) {
                $even_areas[] = $v;
            }
            else {
                $odd_areas[] = $v;
            }
        }
        ?>
        <ul class="col-3 unstyled-list areas--first">
        <?php
        foreach( $odd_areas as $area ) {
          ?>
            <li><?php echo esc_attr($area->name) ?></li>
          <?php
        }
        ?>
        </ul>
        <?php
        ?>
        <img src="<?php echo get_template_directory_uri() . '/src/images/map.png' ?>" alt="lower-mainland" class="col-6 map">
        <ul class="col-3 unstyled-list areas--second">
        <?php
        foreach( $even_areas as $area ) {
          ?>
            <li><?php echo esc_attr($area->name) ?></li>
          <?php
        }
        ?>
        </ul>
        <?php
        ?>
      </div>
    </div>
  </section>
  <section class="reviews--section">
    <h3 class="section-title section-title--no-p">What our clients are saying</h3>
    <div class="reviews--slider">
    <?php
      $args = array(
          'numberposts'	=> -1,
          'post_type'		=> 'manzon_review',
      );

      $query = new WP_Query( $args );

      while ( $query->have_posts() ) : $query->the_post(); 

      ?>
        <q class="text--em" cite=""><? echo the_content() ?></q>

      <?php 
        endwhile;
        wp_reset_postdata();
      ?>

    </div>
    <div class="google-reviews-link">
      <a href="<?php echo esc_attr(get_option('google_reviews_link')); ?>" target="_blank" rel="noopener noreferrer">See our Google Reviews</a>
      <span class="underline underline--white"></span>
    </div>
  </section>
  <section class="call-to-action">
    <h3 class="section-title section-title--no-p">Our work is guaranteed and done with pride. Contact us today!</h3>
    <a class="btn" href="<?php echo get_site_url() . '/contact/' ?>">Contact Us</a>
  </section>

<?php
get_footer();

?>