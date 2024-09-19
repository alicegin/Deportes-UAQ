<?php
/* Template Name: Copa Valores */
wp_head();
?>

<main>
    <?php
    $post_id = get_queried_object_id();
    $post_content = get_post_field('post_content', $post_id);
    $blocks = parse_blocks($post_content);

    set_query_var('blocks', $blocks);
    set_query_var('imagen', 'http://deportesuaq.mx/wp-content/uploads/2024/09/Copa-Valores-1.jpeg');
    set_query_var('posicionTitulo', 'izquierda');
    get_template_part('template-parts/imagen-portada');
    ?>
    <div class="contenedorPrincipal">
        <h1>DESDE 2006</h1>
    </div>

    <div class="contenedorPrincipal">
        <div class="contenedorPrincipal">
            <h1>
                Propósito
            </h1>
        </div>
        <div class="contenedorPrincipal">
            <p>
            Fomentar el deporte y la activación física entre los miembros de esta Casa de Estudios, promoviendo un ambiente de sana competencia y colaboración
            </p>
        </div>
    </div>

    <div class="contenedorPrincipal">
        <h3>
            Participación de 13 facultades
        </h3>
    </div>

    <div class="contenedorPrincipal">
        <div style="flex-wrap:wrap; display:flex; align-content:center; justify-content:center;">
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Bellas Artes
                </h4>
            </div>
    
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Contaduría y Administración
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Derecho
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Ciencias Naturales
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Ciencias Políticas y Sociales
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Enfermería
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Filosofía
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Informática
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Ingeniería
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Lenguas y Letras
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Medicina
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Psicología
                </h4>
            </div>
            <div style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Química
                </h4>
            </div>
        </div>
    </div>

    <div class="contenedorPrincipal">
        <p>
        La Copa Valores Universitarios es un espacio seguro que garantiza <span class="negritas">seguridad y  respeto</span>  de la orientación sexual, identidad de género o expresión de género
        </p>
    </div>

    <div class="contenedorPrincipal" id="Información">
        <div class="contenedorPrincipal">
            <div class="contenido">
                <h1>
                    Primera Fase
                </h1>
                <p>
                Se realizará en el semestre Julio-Diciembre del 2024
                Los deportes de conjunto se consideran:
                </p>
                <li>
                        Básquetbol femenil y varonil
                </li>
                <li>
                        Fútbol 5 varonil
                </li>
                <li>
                        Fútbol 7 femenil
                </li>
                <li>
                        Fútbol soccer varonil
                </li>
                <li>
                        Handball varonil y femenil
                </li>
                <li>
                        Tochito libre
                </li>
                <li>
                        Voleibol femenil y varonil
                </li>
            </div>
        </div>
        <div class="contenedorPrincipal">
            <div class="contenido">
                <h1>
                    Segunda Fase
                </h1>
                <p>
                Se realizará en el semestre Enero – Julio del 2025
                Los deportes Individuales se consideran:
                </p>
                <li>
                        Ajedrez libre
                </li>
                <li>
                        Atletismo femenil, varonil, relevos mixtos
                </li>
                <li>
                        Natación femenil, varonil
                </li>
                <li>
                        Squash femenil y varonil
                </li>
                <li>
                        Tenis femenil y varonil
                </li>
                <li>
                        Tenis de mesa femenil y varonil
                </li>
                <li>
                        Voleibol femenil y varonil
                </li>
            </div>

        </div>
    </div>
    
</main>