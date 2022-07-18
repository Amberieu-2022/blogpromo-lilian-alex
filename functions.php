<?php
add_theme_support('post-thumbnails');

// define('DISALLOW_FILE_EDIT', true); => impossible utiliser back office wordpress pour modifier code

add_filter('login_errors', function(){ return 'error';});


// Récupérer fichier css
function promo_script(){
    wp_enqueue_style('main-', get_theme_file_uri('style.css'));
}

add_action('wp_enqueue_script', promo_script());

// Changer longueur excerpt

function my_excerpt_length($length){
    return 40;
}

add_filter('excerpt_length', 'my_excerpt_length', 999);

// Ajouter un menu

register_nav_menu( 'navHeader', 'Nav header' );

// Fonction ajout class au lien

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//  Fonction ajout de class au lien

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

// Créer des customs posts

add_action('init', 'register_student_post_types'); 


function register_student_post_types(){
    $labels = array(
        'all_items' => 'Tous les apprenants',
        'view_items' => 'Voir les apprenants',
        'singular_name' => 'Apprenant',
        'add_new' => 'Ajouter un apprenant',
        'edit_item' => 'Modifier un apprenant',
        'menu_name' => 'Apprenant',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('post_tag'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-id',
    );
    register_post_type('apprenant', $args);
}

// Ajouter Pagination


