<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!doctype html>
<html lang="fr">
<head>
<link rel="alternate" href="champlacanienbordeaux.logiquehumaine.fr" hreflang="fr-fr" />

<style type="text/css">
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php the_title() ?></title>
</head>
<body class="container-fluid">
<header class="row">
<div class="col-md-12">
  <div class="display-5">Champs lacanien Bordeaux</div>
</div>
<div class="col-md-12">
  <nav class="navbar navbar-expand-md navbar-light bg-light mt-3 mb-3" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
          <span class="navbar-toggler-icon"></span>
      </button>
          <?php
          wp_nav_menu([
            'theme_location'  => 'top',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker()
          ]);
          ?>
      </div>
  </nav>
</div>
</header>
