<?php

// Styles et polices

function demotheme_enqueue_styles()
{
    wp_enqueue_style('GoogleFont', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    wp_enqueue_style('maincss', get_template_directory_uri() . '/styles/main.css', array('GoogleFont'));
}
add_action('wp_enqueue_scripts', 'demotheme_enqueue_styles');



// Theme support
function demotheme_add_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'demotheme_add_theme_support');

function ecole_musique_post_types()
{
    // CPT prof
    $labels = array(
        'name' => 'Enseignant',
        'all_items' => 'Tous les Enseignants',
        // affiché dans le sous menu
        'singular_name' => 'Enseignant',
        'add_new_item' => 'Ajouter un Enseignant',
        'add_new' => 'Ajouter un Enseignant',
        'edit_item' => 'Modifier le Enseignant',
        'menu_name' => 'Enseignant'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'taxonomies' => array('category','post_tag'),
        'menu_icon' => 'dashicons-businessman',
        'rewrite' => array('slug' => 'enseignant')
    );
    register_post_type('Enseignant', $args);
}

// CPT cours
$labels = array(
    'name' => 'Cours',
    'all_items' => 'Tous les Cours',
    // affiché dans le sous menu
    'singular_name' => 'Cour',
    'add_new_item' => 'Ajouter un Cour',
    'add_new' => 'Ajouter un Cour',
    'edit_item' => 'Modifier le Cours',
    'menu_name' => 'Cours'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-book-alt',
    'rewrite' => array('slug' => 'Cours')
);
register_post_type('Cours', $args);


// CPT Widget
$labels = array(
    'name' => 'Widget',
    'all_items' => 'Tous les Widget',
    // affiché dans le sous menu
    'singular_name' => 'Widget',
    'add_new_item' => 'Ajouter un Widget',
    'add_new' => 'Ajouter un Widget',
    'edit_item' => 'Modifier le Widget',
    'menu_name' => 'Widgets'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-excerpt-view',
    'rewrite' => array('slug' => 'Cours')
);
register_post_type('widget', $args);


// Services
$labels = array(
    'name' => 'Service',
    'all_items' => 'Tous les Services',
    // affiché dans le sous menu
    'singular_name' => 'Service',
    'add_new_item' => 'Ajouter un Service',
    'add_new' => 'Ajouter un Service',
    'edit_item' => 'Modifier le Service',
    'menu_name' => 'Service'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-hammer',
    'rewrite' => array('slug' => 'Services')
);
register_post_type('Service', $args);


// CPT Actualités
$labels = array(
    'name' => 'Actualités',
    'all_items' => 'Toutes les Actualités',
    // affiché dans le sous menu
    'singular_name' => 'Actualité',
    'add_new_item' => 'Ajouter une Actualité',
    'add_new' => 'Ajouter une Actualités',
    'edit_item' => 'Modifier les Actualités',
    'menu_name' => 'Actualités'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-site',
    'rewrite' => array('slug' => 'Actualité')
);
register_post_type('Actualités', $args);


// CPT Évenement
$labels = array(
    'name' => 'Evenements',
    'all_items' => 'Tous les Evenements',
    // affiché dans le sous menu
    'singular_name' => 'Evenement',
    'add_new_item' => 'Ajouter un Evenement',
    'add_new' => 'Ajouter un Evenement',
    'edit_item' => 'Modifier un Evenement',
    'menu_name' => 'Evenements'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-calendar-alt',
    'rewrite' => array('slug' => 'Evenement')
);
register_post_type('Evenement', $args);




add_action('init', 'ecole_musique_post_types');


// Menu
function demotheme_register_menu()
{
    register_nav_menus(
        array(
            'menu-principal' => __('Menu principal')
        )
    );
}
add_action('after_setup_theme', 'demotheme_register_menu');

function reg_tag() {
    register_taxonomy_for_object_type('post_tag', 'Enseignant');
}
add_action('init', 'reg_tag');