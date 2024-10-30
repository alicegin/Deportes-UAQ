<?php
/* Template Name: UAQtívate */
get_template_part('template-parts/headerDPT');
?>

<main>
    <?php 
        $post_id = get_queried_object_id();
        $post_content = get_post_field('post_content', $post_id);
        $blocks = parse_blocks($post_content);

        set_query_var('blocks', $blocks);
        set_query_var('imagen', 'http://deportesuaq.mx/wp-content/uploads/2024/10/UAQtivate-1.jpeg');
        get_template_part('template-parts/imagen-portada');
    ?>

    <div class="contenedorPrincipal">
        <h1>
            ¿En qué consiste UAQtívate?
        </h1>
    </div>

    <div class="contenedorPrincipal">
        <div class="contenido">
            <p>
                Es un programa permanente de activación física para combatir el sedentarismo y fomentar el deporte recreativo.
            </p>
            <p class="centrar">
                Se ofrece en dos formas:
            </p>
            <div class="contenidoR">
                <li class="centrar">
                    presencial
                </li>
                <li class="centrar">
                    virtual
                </li>         
            </div>
        </div>
    </div>

    <div class="contenedorPrincipal">
        <div class="contenedorPrincipal">
            <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/widgetDPT.jpeg">
        </div>
        <div class="contenedorPrincipal">

            <div class="centrar">
                <span class="word medium">PROMOVER</span>
                <span class="word small">Sesiones</span>
                <span class="word large">VIDA</span>
                <span class="word large">SALUDABLE</span>
                <span class="word medium">Actividad</span>
                <span class="word medium">Física</span>
                <span class="word small">PRESENCIAL</span>
                <span class="word medium">Eventos</span>
                <span class="word small">VIRTUAL</span>
                <span class="word x-large">COMUNIDAD</span>
            </div>

        </div>
    </div>

    <div class="contenedorPrincipal centrar">
        <h1>
            Virtual
        </h1>
    </div>

    <div class="contenedorPrincipal centrar">
        <h1>
            UAQ DEPORTES
        </h1>
    </div>
    <div class="contenedorPrincipal" id="Virtual">
        <div class="contenedorPrincipal">
            <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fuaqdeportes%2Fvideos%2F403585499432456%2F&show_text=false&width=560&t=0" 
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; overflow: hidden;" 
                scrolling="no" frameborder="0" allowfullscreen="true" 
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                allowFullScreen="true"></iframe>
            </div>

        </div>
        <div class="contenedorPrincipal paginaUAQ">
            <div class="centrar">
                <div class="word">
                    <iframe 
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuaqdeportes&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1835712586922845" 
                        width="340" 
                        height="130" 
                        style="border:none;overflow:hidden" 
                        scrolling="no" 
                        frameborder="0" 
                        allowfullscreen="true" 
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                </div>
        </div>

        </div>

    </div>

    <div class="contenedorPrincipal" id="Presencial">
        <h1>
            Presencial
        </h1>
    </div>

    <div class="contenedorPrincipal">
        <div class="contenedorPrincipal">
            <h3> ¡Recuerda! </h3>
        </div>
        <div class="contenedorPrincipal">
            <p>
                La activación se considera una vez cada quince días y duración de 15 a 20 minutos
            </p>
        </div>
    </div>
    <div class="contenedorPrincipal">
        <div class="contenido">
            <p>
                La siguiente sesión es: <span class="negritas small"> 3 de septiembre de 2024 </span>
            </p>
        </div>
    </div>
</main>