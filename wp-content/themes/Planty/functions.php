<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){

    // Enregistre et inclut le fichier CSS header.css
    wp_enqueue_style(
        'header-style', // Identifiant unique du style
        get_stylesheet_directory_uri() . '/assets/css/header.css', // Chemin vers le fichier CSS
        array(), // Dépendances (aucune ici)
        '1.0.0', // Version du fichier CSS
        'all' // Média cible (all, print, screen, etc.)
    );

    // Enregistre et inclut le fichier CSS footer.css
    wp_enqueue_style(
        'footer-style', // Identifiant unique du style
        get_stylesheet_directory_uri() . '/assets/css/footer.css', // Chemin du fichier CSS
        array(), // Dépendances (aucune ici)
        '1.0.0', // Version du fichier
        'all' // Média cible (all, print, screen, etc.)
    );

    // Enregistre et inclut le fichier CSS formulaire.css
    wp_enqueue_style(
        'formulaire-style', // Identifiant unique du style
        get_stylesheet_directory_uri() . '/assets/css/formulaire.css', // Chemin du fichier CSS
        array(), // Dépendances (aucune ici)
        '1.0.0', // Version du fichier
        'all' // Média cible (all, print, screen, etc.)
    );

    // Inclut le fichier style.css du thème enfant
    wp_enqueue_style(
        'child-style', // Handle du style
        get_stylesheet_directory_uri(), '/style.css', // URL du fichier style.css
        array(), // Pas de dépendances
        '1.0.0', // Version du fichier
    );
}

// Ajouter dynamiquement le lien "Admin" au menu pour les utilisateurs connectés et le placer en avant-dernière position
function ajouter_lien_admin_avant_dernier($items, $args) {
    // Vérifie si c'est bien le menu voulu (remplacez 'header-menu' par le bon theme_location)
    if ($args->theme_location === 'header-menu') {
        if (is_user_logged_in()) {
            // Créez l'élément de menu "Admin"
            $admin_item = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';

            // Divisez les $items existants en tableau pour manipulation
            $items_array = explode('</li>', $items);

            // Nettoyez les éléments vides du tableau
            $items_array = array_filter($items_array);

            // Insérez l'élément "Admin" en avant-dernière position
            array_splice($items_array, count($items_array) - 2, 0, $admin_item);

            // Reconstruisez le menu en chaîne HTML
            $items = implode('</li>', $items_array) . '</li>';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_avant_dernier', 10, 2);

// Enregistrer un emplacement de menu dans le back office de WP pour le header
function enregistrer_menu_header() {
    register_nav_menu('header-menu', __('Menu Header'));
}
add_action('after_setup_theme', 'enregistrer_menu_header');

// Enregistrer un emplacement de menu dans le back office de WP pour le footer
function register_footer_menu() {
    register_nav_menu('footer-menu', __('Menu Footer', 'votre-theme-textdomain'));
}
add_action('after_setup_theme', 'register_footer_menu');