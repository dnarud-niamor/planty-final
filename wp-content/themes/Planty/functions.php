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

    // Inclut le fichier style.css du thème enfant
    wp_enqueue_style(
        'child-style', // Handle du style
        get_stylesheet_directory_uri(), '/style.css', // URL du fichier style.css
        array(), // Pas de dépendances
        '1.0.0', // Version du fichier
    );
}

// Ajouter dynamiquement le lien "Admin" au menu pour les utilisateurs connectés
function ajouter_lien_admin_dans_menu($items, $args) {
    // Vérifie si le menu affiché est celui du header (remplacez 'header-menu' par le slug correct de votre menu)
    if ($args->theme_location === 'header-menu') {
        if (is_user_logged_in()) {
            $items .= '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_dans_menu', 10, 2);

// Enregistrer un emplacement de menu pour le header
function enregistrer_menu_header() {
    register_nav_menu('header-menu', __('Menu Header'));
}
add_action('after_setup_theme', 'enregistrer_menu_header');