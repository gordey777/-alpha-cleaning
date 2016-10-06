<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <div class="logo">
          <a href="/">АЛЬФА-ЧИСТКА</a>
          <p class="tel">(495)644-58-85</p>
          <p class="adr">г. Москва, ул. Воронцовская, д 4, стр. 3</p>
        </div><!-- /logo -->
        <div class="head-baner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/head-slide.jpg" alt="">
        </div>
        <div class="header-nav-menu col-md-12">
<nav class="nav__header" role="navigation">
            <?php wpeHeadNav(); ?>
  <!--

            <ul class="headnav">
              <li><a href="#">О НАС</a></li>
              <li><a href="#">КОНТАКТЫ</a></li>
              <li><a href="#">ОТЗЫВЫ</a></li>
              <li><a href="#">ЦЕНЫ</a></li>
              <li><a href="#">АКЦИИ</a></li>
            </ul>
          -->
          </nav><!-- /nav -->
          <div class="conect">
            <a href="#openModal">ОНЛАЙН ЗАКАЗ</a>

            <div id="openModal" class="modalDialog">
              <div>
                <a href="#close" title="Закрыть" id="mod-close" class="close"></a>
                <h2>Модальное окно</h2>
                <p>Пример простого модального окна, которое может быть создано с использованием CSS3.</p>
                <p>Его можно использовать в широком диапазоне, начиная от вывода сообщений и заканчивая формой регистрации.</p>
              </div>
            </div>
          </div>
        </div><!-- /.header-nav-menu -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->


  <section role="main">
    <div class="inner">
