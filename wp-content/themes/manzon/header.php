<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <?php wp_head(); ?>
    <title><?php bloginfo('name') - wp_title(); ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-186841939-1">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-186841939-1');
    </script>
</head>

<body>
  <header class="site-header">
    <div class="site-header__logo">
      <a class="site-header__logo__title" href="<?php echo get_site_url() ?>">Manzon</a> 
      <!-- <div class="site-header__logo__subtitle"><em>Your local plumbing experts!</em></div> -->
    </div>
    <div class="site-header__menu-content">
      <div class="site-header__btn"><a href="tel:<?php echo esc_attr(get_option('phone_number')); ?>">
          <p class="site-header__btn__text"><?php echo esc_attr(get_option('phone_number')); ?></p><i class="fas fa-phone site-header__btn__phone"></i>
        </a></div>
      <input type="checkbox" id="nav-toggle" class="site-header__nav-toggle">
      <nav class="site_header__primary-nav">
        <ul>
          <li><a href="<?php echo get_site_url() ?>">Home</a></li>
          <li><a href="<?php echo get_site_url() . '/residential/' ?>">Residential</a></li>
          <li><a href="<?php echo get_site_url() . '/commercial/' ?>">Commercial</a></li>
          <li><a href="<?php echo get_site_url() . '/about/' ?>">About</a></li>
          <li><a href="<?php echo get_site_url() . '/contact/' ?>">Contact</a></li>
        </ul>
      </nav>
      <label for="nav-toggle" class="site-header__nav-toggle-label">
        <i class="fas fa-bars site-header__nav-toggle-label__bars"></i>
        <i class="fas fa-times site-header__nav-toggle-label__x"></i>
      </label>
    </div>
  </header>
