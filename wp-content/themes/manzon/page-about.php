<?php get_header(); ?>

  <section class="hero hero--info-page">
    <h1>About Manzon Development</h1>
  </section>

  <section class="about-content">
    <p class="about-content--top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <img class="about-content--left" src="assets/imgs/img_5357.jpg" alt="">
    <p class="about-content--right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </section>
  <section id="reviews" class="reviews--main">
    <h3 class="section-title--info">Our Reviews</h3>
    <div class="single-review">
      <q class="text--em" cite="customer name">Sample review text</q>
    </br>
    <cite>customer name</cite>
  </div>
  <div class="single-review">
    <q class="text--em" cite="customer name">Sample review text</q>
  </br>
  <cite>customer name</cite>
</div>
<div class="single-review">
  <q class="text--em" cite="customer name">Sample review text</q>
</br>
<cite>customer name</cite>
</div>
<div class="single-review">
  <q class="text--em" cite="customer name">Sample review text</q>
</br>
<cite>customer name</cite>
</div>
</section>

<section class="call-to-action">
  <h3 class="section-title">Our work is guaranteed and done with pride. Contact us today!</h3>
  <a class="btn" href="<?php echo get_site_url() . '/contact/' ?>">Contact Us</a>
</section>

<?php get_footer(); ?>