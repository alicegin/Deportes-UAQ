<?php
function deportesuaq_enqueue_styles() {
    // Estilo principal para todas las paginas
    wp_enqueue_style('allStyle', get_template_directory_uri() . '/css/allStyle.css');
    wp_enqueue_style('deportesUAQ-boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    
    // Estilo para el header, lo hace para todas las paginas
    wp_enqueue_style('headerStyle', get_template_directory_uri() . '/css/headerStyle.css');


    // Si estás en la página "index"
    if (is_home()||is_front_page()) {
        wp_enqueue_style('aboutStyle', get_template_directory_uri() . '/css/mainStyle.css');
    }

    // Si estás en la página "Salón de la Fama", encola un estilo adicional específico
    if (is_page('salon-de-la-fama')) {
        wp_enqueue_style('famaStyle', get_template_directory_uri() . '/css/famaStyle.css');
    }
    if (is_page('condde')) {
        wp_enqueue_style('conddeStyle', get_template_directory_uri() . '/css/conddeStyle.css');
    }
    if (is_page('ciencias-aplicadas')) {
        wp_enqueue_style('cienciasStyle', get_template_directory_uri() . '/css/cienciasStyle.css');
    }

    if (is_page('documentos')){
        wp_enqueue_style('documentosStyle', get_template_directory_uri() . '/css/documentosStyle.css');
    }
    if(is_page('uaqtivate')){
        wp_enqueue_style('uaqtivateStyle', get_template_directory_uri() . '/css/uaqtivateStyle.css');
    }
    if(is_page('indet')){
        wp_enqueue_style('indetStyle', get_template_directory_uri() . '/css/indetStyle.css');
    }

    if (is_page('gatienda')){
        wp_enqueue_style('documentosStyle', get_template_directory_uri() . '/css/gatiendaStyle.css');
    }

    if (is_page('deportes-para-todes')) {
        wp_enqueue_style('documentosStyle', get_template_directory_uri() . '/css/deportesTodos.css');
    }
    if (is_page('ca')) {
        wp_enqueue_style('caStyle', get_template_directory_uri() . '/css/caStyle.css');
    }
    if (is_page('especializacion-deportiva')) {
        wp_enqueue_style('espDepStyle', get_template_directory_uri() . '/css/espDepStyle.css');
    }
    if (is_page('copa-valores-universitarios')) {
        wp_enqueue_style('copaValores', get_template_directory_uri() . '/css/copaValoresStyle.css');
    }
    if (is_page('conocenos')) {
        wp_enqueue_style('conocenosStyle', get_template_directory_uri() . '/css/conocenosStyle.css');
    }
    if (is_page('contacto')) {
        wp_enqueue_style('contactoStyle', get_template_directory_uri() . '/css/contactoStyle.css');
    }
    if (is_page('selecciones-universitarias')) {
        wp_enqueue_style('seleccionesStyle', get_template_directory_uri() . '/css/seleccionesStyle.css');
    }
}
add_action('wp_enqueue_scripts', 'deportesuaq_enqueue_styles', 20);


function titulo_personalizado($texto) {
    $titulo= get_the_title();
    return $texto . ' ' . $titulo;
}



function custom_cors_headers() {
    if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] === 'http://deportes-uaq.local') {
        header("Access-Control-Allow-Origin: http://deportes-uaq.local");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type");
    }
}
add_action('init', 'custom_cors_headers');

?>
