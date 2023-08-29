<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory()
     . '/css/theme.css'));
}

/* Header & Footer personnalisés : le thème Neve convenant dans le projet actuel, je laisse les deux fonctions à titre d'exemple */
/*
function register_custom_menus() {
    register_nav_menus(array(
        'header-menu' => 'Menu du header',
    ));
}
add_action('after_setup_theme', 'register_custom_menus');


function register_footer_menu() {
    register_nav_menu('footer-menu', 'Menu du footer');
}
add_action('after_setup_theme', 'register_footer_menu'); 
*/


/* Admin link */
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);
function ajouter_lien_admin($items, $args) {
    if ($args->theme_location == 'primary' && is_user_logged_in() && current_user_can('administrator')) {
        $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}