<?php
/* Template Name: INDET */
get_template_part('template-parts/headerDPT');
?>
<main>
    <?php
        $post_id = get_queried_object_id();
        $post_content = get_post_field('post_content', $post_id);
        $blocks = parse_blocks($post_content);

        set_query_var('blocks', $blocks);
        set_query_var('imagen', 'http://deportesuaq.mx/wp-content/uploads/2024/09/Portada-INDET.png');
        get_template_part('template-parts/imagen-portada');
    ?>
    <div class="contenedorPrincipal">
        <h1>
            ¿Qué es INDET?
        </h1>
    </div>
    <div class="contenedorPrincipal">
        <h4>Instituto del Deporte de los Trabajadores</h4>
    </div>
    <div class="contenedorPrincipal">
        <div class="contenedorPrincipal">
            <p>Organismo Oficial del Congreso del Trabajo, encargado de promover la actividad física y el deporte entre los trabajadores y sus familias.
            </p>
        </div>
        <div class="contenedorPrincipal">
            <p>
            Su objetivo es mejorar la salud y fomentar la integración familiar a través del deporte y la actividad física.
            </p>
        </div>
    </div>

    <div class="contenedorPrincipal contenidoR">
        <div class="redes">
        <h4 class="centrar">Ir a la página de INDET:</h4>
            <a href="https://indet.org.mx">
                <img src="http://deportesuaq.mx/wp-content/uploads/2024/09/INDET-foto.png" class="imagen-redes">
            </a>
            <div class="banner-redes centrar">
                <p>Redes sociales:</p>
                <a href="https://www.facebook.com/INDETMXOFICIAL/?locale=es_LA">
                    <img src="<?php  echo get_template_directory_uri() . '/assets/facebook.png' ?>" class="imagen">
                </a>
                <a href="https://x.com/indetmexico?lang=es">
                    <img src="<?php  echo get_template_directory_uri() . '/assets/twitter.png' ?>" class="imagen">
                </a>
            </div>
        </div>
    </div>
</main>