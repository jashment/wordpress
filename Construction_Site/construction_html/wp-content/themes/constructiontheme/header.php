<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Jordan's Construction<?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/scss/styles.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet" />
</head>

<body>
  <header>
    <div id="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/logo1x.png 1x, <?php echo get_template_directory_uri(); ?>/images/logo2x.png 2x, <?php echo get_template_directory_uri(); ?>/images/logo3x.png 3x" alt="logo" />
    </div>
    <div>
      <p><a href="tel:1-800-234-5678">1-800-234-5678</a></p>
    </div>
  </header>

  <nav>
    <div style="max-width: 1200px; margin: auto; height: 45px;">
      <button id="hamburgerBtn"></button>
      <?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?>
      <ul id="secondaryNav">
        <li id="searchBar">
          <form><input type="search" placeholder="Search" name="s" /><button type="submit" class="submit"><i
                class="fa fa-search"></i></button></form>
        </li>
      </ul>
    </div>
  </nav>