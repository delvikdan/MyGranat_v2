<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package mygranat
*/

?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!--[if lt IE 10]>
      <link rel="stylesheet" href="/source/themes/mygranat/assets/css/ie.css">
      <![endif]-->
  </head>

  <body <?php body_class(); ?>>


    <header class="site-header">
      <nav class="site-nav">
        <div class="container">
          <a class="main-logo" rel="home" title="На главную" href="/">
            <img src="/source/themes/mygranat/assets/img/granat_logo_circle.svg" alt="My Granat">
          </a>
          <?php if (is_page()) : ?>
          <div class="page-headline"><?php  the_title();  ?></div>
          <?php endif;  ?>
          <div class="ninja-btn trigger-nav"><span></span></div>

          <div class="mobile-menu trigger-victim">
            <div class="mobile-logo"><img src="/source/themes/mygranat/assets/img/logo_name.svg" alt="Granat"></div>
            <ul class="horizontal-nav">
              <li><a href="/uslugi/">Услуги</a></li>
              <li><a href="/portfolio">Портфолио</a></li>
              <li><a href="/o-nas/">О нас</a></li>
              <li><a href="/blog/">Блог</a></li>
              <li><a href="/kontakty/">Контакты</a></li>
            </ul>
            <div class="header-phones">
              <img class="contact-icon" src="/source/themes/mygranat/assets/img/phone_icon.svg" alt="Телефон">
              <a title="" href="tel:+74955322838">+7 (495) 532 - 28 - 38</a>
            </div>
          </div>

        </div>
        <!-- // .container -->
      </nav>
      <!-- // .site-nav -->
    </header>
    <!-- //header -->

    <div id="page" class="site">
      <div id="content" class="site-content">