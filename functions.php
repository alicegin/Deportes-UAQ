<?php
//Añadir el título de forma dinámica
function deportesUAQ_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme','deportesUAQ_theme_support');
//Función para insertar el css de manera dinámica (hay que utilizar el código "wp_head();" en la página que queremos poner los stylesheets)
function deportesUAQ_register_styles(){
    wp_enqueue_style('deportesUAQ-style',get_template_directory_uri() . "/assets/css/style.css", array(), '1.0');
    wp_enqueue_style('deportesUAQ-boostrap',get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '1.0');
}

add_action('wp_enqueue_scripts', 'deportesUAQ_register_styles');
?>

<?php
//Función para insertar los scripts
function deportesUAQ_register_scripts(){
    wp_enqueue_script('deportesUAQ-jquery',get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array(), '1.0');
}

add_action('wp_enqueue_scripts', 'deportesUAQ_register_scripts');
?>