<?php get_header() ?>

</header>
    <section class="hero hero--industry-page" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
      <div class="hero--industry-page__title">
        <h1>Commercial</h1>
        <span class="underline--title"></span>
      </div>
    </section>

    <section class="features">
      <h3 class="section-title section-title--no-p">Expertise. Professionalism.</h3>
      <div class="container--industry container--industry--commercial">
        <div class="feature--detail">
          <h4 class="feature__title accent--com">Gas Fittings</h4>
          <span class="underline--feature"></span>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit </p>
        </div>
        <div class="feature--detail">
          <h4 class="feature__title accent--com">Makeup Air Units</h4>
          <span class="underline--feature"></span>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit </p>
        </div>
        <div class="feature--detail">
          <h4 class="feature__title accent--com">Maintenance</h4>
          <span class="underline--feature"></span>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit </p>

        </div>
        <div class="feature--detail">
          <h4 class="feature__title accent--com">Heating</h4>
          <span class="underline--feature"></span>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit </p>

        </div>

      </div>
    </section>
    <section class="gallery">

      <h3 class="section-title">Gallery</h3>
      <div class="gallery__container">
        <div class="gallery__residential">
          <div class="main">
            <div class="slider slider-display">
              <div><img class="photo" data-lazy="assets/imgs/img_5357.jpg" alt=""> </div>
              <div><img class="photo" data-lazy="assets/imgs/img_7318.jpg" alt=""></div>
              <div><img class="photo" data-lazy="assets/imgs/img_7319.jpg" alt=""></div>
              <div><img class="photo" data-lazy="assets/imgs/img_8103.jpg" alt=""></div>
              <div><img class="photo" data-lazy="assets/imgs/img_5357.jpg" alt=""> </div>
              <div><img class="photo" data-lazy="assets/imgs/img_7318.jpg" alt=""></div>
              <div><img class="photo" data-lazy="assets/imgs/img_7319.jpg" alt=""></div>
              <div><img class="photo" data-lazy="assets/imgs/img_8103.jpg" alt=""></div>
            </div>

            <div class="slider slider-nav">
              <div><img class="nav" data-lazy="assets/imgs/img_5357.jpg" alt=""> </div>
              <div><img class="nav" data-lazy="assets/imgs/img_7318.jpg" alt=""></div>
              <div><img class="nav" data-lazy="assets/imgs/img_7319.jpg" alt=""></div>
              <div><img class="nav" data-lazy="assets/imgs/img_8103.jpg" alt=""></div>
              <div><img class="nav" data-lazy="assets/imgs/img_5357.jpg" alt=""> </div>
              <div><img class="nav" data-lazy="assets/imgs/img_7318.jpg" alt=""></div>
              <div><img class="nav" data-lazy="assets/imgs/img_7319.jpg" alt=""></div>
              <div><img class="nav" data-lazy="assets/imgs/img_8103.jpg" alt=""></div>
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