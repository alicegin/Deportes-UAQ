<?php
function deportesuaq_enqueue_styles() {
    // Estilo para el header, lo hace para todas las paginas
    wp_enqueue_style('headerStyle', get_template_directory_uri() . '/css/headerStyle.css');

    // Si estás en la página "index"
    if (is_home()) {
        wp_enqueue_style('aboutStyle', get_template_directory_uri() . '/css/mainStyle.css');
    }

    // Si estás en la página "Salón de la Fama", encola un estilo adicional específico
    if (is_page('salon-de-la-fama')) {
        wp_enqueue_style('famaStyle', get_template_directory_uri() . '/css/famaStyle.css');
    }
}
add_action('wp_enqueue_scripts', 'deportesuaq_enqueue_styles', 20);
?>
