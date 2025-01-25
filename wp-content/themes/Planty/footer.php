<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<footer>
    <div class="footer-container">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container'      => 'nav',
                'container_class'=> 'footer-menu-container',
                'menu_class'     => 'footer-menu-items',
            ));
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>