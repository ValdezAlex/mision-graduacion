<?php

function child_theme_enqueue_styles()
{
    $child_version = wp_get_theme()->get('Version');

    // Estilos del padre
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.min.css',
        array('alt_custom_theme'), // depende del handle del padre
        $child_version
    );

    // Encola los scripts del tema padre si es necesario
    wp_enqueue_script('parent-scripts', get_template_directory_uri() . '/js/main.js', array(), null, true);

    // Script del hijo (footer fixed)
    wp_enqueue_script(
        'child-footer-position',
        get_stylesheet_directory_uri() . '/js/footer-position.js',
        array('jquery'), // depende de jQuery
        $child_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');


// Funcion para cargar SVG
// function permitir_svg_upload($mimes) {
//     $mimes['svg'] = 'image/svg+xml';
//     return $mimes;
// }
// add_filter('upload_mimes', 'permitir_svg_upload');