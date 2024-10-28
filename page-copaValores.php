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
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/AJEDREZ_LIBRE.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">AJEDREZ LIBRE</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/ATLETISMO.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">ATLETISMO</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/NATACION.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">NATACION</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/SQUASH.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">SQUASH</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/TENIS_2.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">TENIS</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/INDIVIDUALES/TENIS_DE_MESA.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">TENIS DE MESA</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>            
            </div>
        </div>
        <div class="parteDeportesContainer">
            <h2>Deportes Colaborativos</h2>
            <div class="imgDeporteContainer">
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/VOLEIBOL_FEMENIL.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">VOLEIBOL FEMENIL</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/FUTBOL_5_VARONIL.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">FUTBOL 5 VARONIL</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/HANDBALL_FEMENIL.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">HANDBALL FEMENIL</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/ATLETISMO.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">RELEVOS MIXTOS</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/VOLEIBOL_VARONIL.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">VOLEIBOL VARONIL</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/FUTBOL_7_FEMENIL.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">FUTBOL 7 FEMENIL</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/TOCHITO_LIBRE.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">TOCHITO LIBRE</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/BASQUETBOL_FEMENIL.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">BASQUETBOL FEMENIL</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
                <div class="deporteCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/CONJUNTO/FUTBOL_SOCCER_VARONIL.jpg" alt="Copa Valores UAQ">
                    </div>
                    <div class="infoContainer">
                        <h1 class="nombreDeporte">FUTBOL SOCCER VARONIL</h1>
                        <p class="tipoCompetencia">COPA VALORES UNIVERSITARIOS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedorPrincipal">
        <h5>Participación de 13 facultades</h5>
        <div class="facultadContent" style="flex-wrap:wrap; display:flex; align-content:center; justify-content:center;">
            <div class="facultadContainer" style="background-color: gray; width:200px; height: 200px; display: flex; margin:10px 10px 10px 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deportesCVU/FACULTADES/FIF.jpg" alt="Facultades Copa Valores UAQ">
                <h4 style="align-self: center; text-align: center;">Facultad de Informática</h4>
            </div>
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