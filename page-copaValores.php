<?php
/* Template Name: Copa Valores */
get_template_part('template-parts/headerDPT');
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
        <div class="headerContenedor">
            <h2>Desde 2006</h2>
        </div>
        <h3 style="margin-top: 8px;"><strong>Con deportes individuales y colaborativos</strong></h3>
        <p>La <strong>Copa Valores Universitarios</strong> cuenta con su propósito de Fomentar el deporte y la activación física entre los miembros de esta Casa de Estudios, promoviendo un ambiente de sana competencia y colaboración. Con un espacio seguro que garantiza <span class="negritas">seguridad y respeto</span> de la orientación sexual, identidad de género o expresión de género</p>
    </div>
    <div class="deportesContainer">
        <div class="parteDeportesContainer">
            <h2>Deportes Individuales</h2>
            <div class="imgDeporteContainer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/ATLETISMO_A.png" alt="Copa Valores UAQ">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/BOX.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/ESCALADA.png" alt="Copa Valores UAQ"> -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/JUDO A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/KARATE A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/LEVANTAMIENTO A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/LUCHA A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/TENIS A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/TENIS DE MESA A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/TIRO CON ARCO A.png" alt="Copa Valores UAQ">
            </div>
        </div>
        <div class="parteDeportesContainer">
            <h2>Deportes Colaborativos</h2>
            <div class="imgDeporteContainer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/BÁSQUETBOL_V_A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/FÚTBOL ASOCIACIÓN_F_A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/VOLEIBOL_V_A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/SÓFTBOL A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/FÚTBOL ASOCIACIÓN_V_A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/BÁSQUETBOL_F_A.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/BÉISBOL B.png" alt="Copa Valores UAQ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/VOLEIBOL_F_A.png" alt="Copa Valores UAQ">
            </div>
        </div>
    </div>
    <div class="contenedorPrincipal">
        <h5>Participación de 13 facultades</h5>
        <div class="facultadContent" style="flex-wrap:wrap; display:flex; align-content:center; justify-content:center;">
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FBA.png" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Bellas Artes
                </h4>
            </div>

            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FCA.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Contaduría y Administración
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FD.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Derecho
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FCN.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Ciencias Naturales
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FCPS.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Ciencias Políticas y Sociales
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FEN.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Enfermería
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FFI.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Filosofía
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FIF.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">Facultad de Informática</h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FI.png" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Ingeniería
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FLL.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Lenguas y Letras
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FM.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Medicina
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FPE.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Psicología
                </h4>
            </div>
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FQ.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">
                    Facultad de Química
                </h4>
            </div>
        </div>
    </div>
    <!-- <div class="contenedorPrincipal" id="Información">
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
    </div> -->
</main>