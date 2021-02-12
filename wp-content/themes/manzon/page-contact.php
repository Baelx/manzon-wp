<?php get_header() ?>

<section class="hero--info-page">
    <h1>Contact</h1>
  </section>

  <section class="contact__form">
  </section>
  <section class="call-to-action">
        <p>You can reach us by email or phone, 7 days a week!</p>

        <a class="contact-info text-em call-now" href="mailto:<?php echo esc_attr(get_option('email_address')); ?>">
          <i class="fas fa-envelope"></i><p><?php echo esc_attr(get_option('email_address')); ?></p>
        </a>
        </br>
        <a class="contact-info text-em call-now" href="tel:<?php echo esc_attr(get_option('phone_number')); ?>">
          <i class="fas fa-phone"></i><p><?php echo esc_attr(get_option('phone_number')); ?></p>
        </a>
  </section>

  <?php get_footer(); ?>