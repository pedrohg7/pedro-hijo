<?php
// Cargar la hoja de estilos del tema hijo.
function sneakershub_cargar_estilos() {

    wp_enqueue_style(
        'pedro-hijo-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

}
add_action('wp_enqueue_scripts', 'sneakershub_cargar_estilos');
