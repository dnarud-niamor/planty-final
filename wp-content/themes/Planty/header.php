<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo de la marque Planty">
                </a>
            </div>

            <!-- Menu de navigation -->
            <div class="nav">
                <nav class="navigation">
                    <?php
                    wp_nav_menu(array(
                        'container' => false,
                        'theme_location' => 'header-menu',
                        'menu_class' => 'menu',
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </header>