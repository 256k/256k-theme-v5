<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

  <div id="navbar">
    <div class="navbar-wrapper">
      <div class="container">
        <div class="flex-row">
          <div class="nav-title">
            <a href="<?php bloginfo('url') ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
            <h1 class="drop-button"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h1>
          </div>

          <?php wp_nav_menu( $args = array('theme_location' => 'primary' ) ); ?>
          


        </div>
      </div>
      </div>
    </div>
