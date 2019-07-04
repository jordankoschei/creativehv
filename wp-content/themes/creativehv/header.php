<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body>

<header class="header">
  <div class="inner flex">
    <a href="<?php site_url(); ?>" class="logo">
      Creative <strong>Hudson Valley</strong>
    </a>

    <?php wp_nav_menu(array('menu' => 'header', 'container' => 'nav')); ?>
  </div>
</header>
