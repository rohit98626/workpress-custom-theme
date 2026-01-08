<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container nav">
    <strong>Rohit</strong>
    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
      ]);
    ?>
  </div>
</header>
