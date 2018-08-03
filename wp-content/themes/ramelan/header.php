<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <title><?php bloginfo('name'); ?></title>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div id="header" class=" mb-4">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-md-4 pt-1">
            <!-- <a class="text-muted" href="#">Subscribe</a> -->
          </div>
          <div class="col-md-4 text-center">
            <div class="blog-header-logo text-dark text-center">
              <h1 class="head-logo">
                <a href="<?php echo get_home_url(); ?>">
                  <strong>Rahardi</strong>Ramelan
                </a>
              </h1>
            </div>
          </div>
          <div class="col-md-4 d-flex justify-content-end align-items-center">
            <!-- <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a> -->
            <!-- <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a> -->
          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <?php
            $menu_name = 'header-menu';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
            
            foreach($menuitems as $menu):
              $title = $menu->title;
              $link = $menu->url;
          ?>
              <a class="p-2 text-muted" href="<?php echo $link;?>"><?php echo $title; ?></a>
          <?php endforeach; ?>
        </nav>
      </div>
    </div>  