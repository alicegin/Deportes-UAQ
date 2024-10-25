<?php
function deportesuaq_enqueue_styles() {
    // Estilo principal para todas las paginas
    wp_enqueue_style('allStyle', get_template_directory_uri() . '/css/allStyle.css');
    wp_enqueue_style('deportesUAQ-boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    
    // Estilo para el header, lo hace para todas las paginas
    wp_enqueue_style('headerStyle', get_template_directory_uri() . '/css/headerStyle.css');

    wp_enqueue_style('footerStyle', get_template_directory_uri() . '/css/footerStyle.css');

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
}
add_action('wp_enqueue_scripts', 'deportesuaq_enqueue_styles', 20);

//Función para insertar los scripts
function deportesUAQ_register_scripts(){

    wp_enqueue_script('carouselScript',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js");
    
}

add_action('wp_enqueue_scripts', 'deportesUAQ_register_scripts');

function titulo_personalizado($texto) {
    $titulo= get_the_title();
    return $texto . ' ' . $titulo;
}

function extract_block_content($blocks, $block_name) {
    $contents = [];
    foreach ($blocks as $block) {
        if ($block['blockName'] === $block_name) {
            $contents[] = $block['innerHTML'];
        }
        if (!empty($block['innerBlocks'])) {
            $contents = array_merge($contents, extract_block_content($block['innerBlocks'], $block_name));
        }
    }
    return $contents;
}

?>
