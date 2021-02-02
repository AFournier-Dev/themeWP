<?php
function apprendreetcommencer_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');

    // add_image_size('post_thumbmail', 225, 350, true); // attention Wordpress ne fait pas de levelup of size image
    //  remove_image_size('medium');
    //  add_image_size('medium', 500, 750);
}


//INCLUSION DE BOOTSTRAP
function apprendreetcommencer_register_assets()
{


    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}



//Inclusion de classitem dans les li de la navbar

function apprendreetcommencer_menu_class(array $classes): array{
    $classes[] = 'nav-item';
    return $classes;
}
function apprendreetcommencer_menu_link_class(array $attrs): array{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_action('after_setup_theme', 'apprendreetcommencer_supports');
add_action('wp_enqueue_scripts' , 'apprendreetcommencer_register_assets'); 
// !!!!!! wp_enqueue_scripts et non styles !!!!!!!!!!!!!!!!!!!!!!!!

add_filter('nav_menu_css_class', 'apprendreetcommencer_menu_class');

add_filter('nav_menu_link_attributes', 'apprendreetcommencer_menu_link_class');