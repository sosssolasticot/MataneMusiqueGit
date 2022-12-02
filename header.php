<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div class="div_header">
        <div> 
            <figure class="header_logo_column">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/logoEcoleDeMusique.png' ?> "
                        class="header_logo" alt="logo ecole de musique de Matane"></a>
                <!-- <figcaption class="header_logo_description">École de musique de Matane</figcaption> -->
                <figcaption><a href="<?php echo esc_url(home_url('/')); ?>" class="header_logo_description">
                        <?php bloginfo('name'); ?>
                    </a></figcaption>
            </figure>
        </div>



        <div class="header_parent">
            <label class="toggle-button">
                <input type="checkbox">
                <span class="menu-burger">
                    <span class="bar"></span>
                </span>
                <div class="nav-container mobile">
                    <?php
                    $args = array(
                        'theme_location' => 'menu-principal'
                    );
                    wp_nav_menu($args);
                    ?>
                    <div class="mobile-nav">
                        <button class="header_button_mobile">Faire un don</button>
                        <button class="header_button_mobile">S’inscrire</button>
                        <button class="header_button_mobile"> <img
                                src="<?php echo get_template_directory_uri() . '/images/icons/profileicon.png' ?> "
                                class="header_icons2" alt="icons profile"> </button>
                    </div>
                </div>
            </label>
            <!--<div class="">
                <input type="checkbox">
                <a href="#">
                    <span class="bar"> </span>
                    <span class="bar"> </span>
                    <span class="bar"> </span>
                </a>
            </div>-->


            <div class="div_header_haut">
                <form action="<?php echo esc_url(home_url('/')) ?>" class="search-form" method="get">
                    <input type="text" class="search-input" name="s" placeholder="Rechercher">
                    <button type="submit" value="Rechercher" class="header_search"> <i
                            class="fa-solid fa-magnifying-glass"></i> </button>
                </form>
                <button class="header_button">Faire un don</button>
                <button class="header_button">S’inscrire</button>
                <a class="header_telephone" href="tel:+1-418-562-4212"> 418-562-4212</a>
                <a href="https://www.facebook.com/people/%C3%89cole-de-musique-de-Matane/100063641619675/"
                    target="_blank"> <img
                        src="<?php echo get_template_directory_uri() . '/images/icons/facebooklogo.png' ?> "
                        class="header_icons" alt="icons facebook"> </a>
                <a href="#"> <img src="<?php echo get_template_directory_uri() . '/images/icons/profileicon.png' ?> "
                        class="header_icons2" alt="icons profile"> </a>

            </div>

            <nav>
                <div class="nav-container desktop">
                    <?php
                    $args = array(
                        'theme_location' => 'menu-principal'
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <hr class="header_hr">
                <!-- <ul class="menu">
        <li><a href="">Accueil</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">À propos</a></li>
    </ul> -->
            </nav>
        </div>

    </div>


    <div>

    </div>

    <!-- <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
-->



    <main class="container">