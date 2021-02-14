<?php get_header() ?>
<div class="contact-page">
  <section class="service-areas call-to-action" style="background-image: url(<?php echo get_template_directory_uri() . '/src/images/downtown.jpg' ?>)">
    <h1>Contact</h1>
    <div class="cover">
        <p>You can reach us by email or phone, 7 days a week!</p>

        <a class="contact-info text-em call-now" href="mailto:<?php echo esc_attr(get_option('email_address')); ?>">
          <i class="fas fa-envelope"></i><p><?php echo esc_attr(get_option('email_address')); ?></p>
        </a>
        </br>
        <a class="contact-info text-em call-now" href="tel:<?php echo esc_attr(get_option('phone_number')); ?>">
          <i class="fas fa-phone"></i><p><?php echo esc_attr(get_option('phone_number')); ?></p>
        </a>
    <div>
  </section>
<div>
<?php get_footer(); ?>