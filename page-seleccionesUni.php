<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php
    wp_head();
    wp_footer();
    ?>
    <style>
        .sliderContainer {
            margin-bottom: 50px !important;
        }

        .mainRow.flex .mainRow.side img {
            width: 600px;
            max-height: 400px;
            object-fit: cover;
        }

        .flex {
            display: flex;
        }

        .wrap {
            flex-wrap: wrap;
        }

        .cardContainer {
            align-items: center;
            min-width: 565px;
            width: auto;
        }

        .align-start {
            align-items: flex-start;
        }

        .cardSide {
            justify-content: space-between;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .cardSide img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .mainRow .cardContainer {
            flex: 1;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php
    /* Template Name: Selecciones Universitarias */
    get_template_part('template-parts/header');
    ?>
    <main>
        <?php get_template_part('template-parts/slider'); ?>
        <section class="mainRow flex">
            <section class="mainRow side">
                <h2>¿Qué SON LAS SELECCIONES UNIVERSITARIAS?</h2>
                <p>
                    Las selecciones universitarias son grupos deportivos integrados por estudiantes
                    representan a la Universidad Autónoma de Querétaro en diversas competencias de alto
                    nivel. Estas competiciones incluyen tanto eventos nacionales organizados por el Consejo
                    Nacional del Deporte de la Educación (CONDDE) como internacionales bajo la Federación
                    Internacional de Deportes Universitarios (FISU).
                    <br>
                    <br>
                    Actualmente, la Universidad Autónoma de Querétaro cuenta con un total de 25 disciplinas
                    deportivas, que abarcan tanto deportes individuales como de conjunto. Estas disciplinas
                    son practicadas por más de 300 seleccionados, provenientes de las distintas facultades de
                    la universidad.
                    <br>
                    <br>
                    Los miembros de las selecciones universitarias representa una oportunidad invaluable para
                    los estudiantes de desarrollar sus habilidades deportivas, fomentar el trabajo en equipo y
                    cultivar valores como la disciplina, el esfuerzo y la dedicación. Además, estas experiencias
                    competitivas contribuyen significativamente a su formación integral, complementando su
                    educación académica con el crecimiento personal y profesional que el deporte puede
                    proporcionar.
                </p>
            </section>
            <section class="mainRow side">
                <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E1.png" />
            </section>
        </section>
        <section class="mainRow flex wrap">
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>AJEDREZ</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/AZ.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>CARLOS DILAN SOLÍS LANDA</h3>
                    <h4>442 380 5535</h4>
                    <p>
                        <strong>Auditorio FCA (Centro Universitario)</strong><br>
                        Martes 17:00 - 21:00<br>
                        Viernes 16:00 - 21:00<br>
                        Sábado 09:00 - 14:00<br>
                    </p>
                    <p>
                        <strong>Auditorio Ciencias Naturales (Campus Juriquilla)</strong><br>
                        Lunes 09:00 - 11:00 y 16:30 - 20:30<br>
                        Miércoles 16:30 - 20:30<br>
                    </p>
                    <p style="font-style: italic;">

                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>ATLETISMO</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/AT.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>JÉSUS LOYO NASTA</h3>
                    <h4>442 602 9885</h4>
                    <p>
                        <strong>Pista de atletismo / Gimnasio (Campus Corregidora)</strong><br>
                        Lunes a Jueves 17:00 - 19:00 <br>
                        Sábado 09:00 - 11:00 <br>
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>BOXEO UNIVERSITARIO</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/BX.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>ARTURO VARGAS GARCÍA</h3>
                    <h4>442 138 7289</h4>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>JUDO</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/JD.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>ALFREDO VÁZQUEZ MIRANDA</h3>
                    <h4>442 351 8267</h4>
                    <p>
                        <strong> GYM Ingeniería (Centro Universitario)</strong><br>
                        Lunes a Viernes 19:00 - 21:00 <br>
                        Sábado 09:00 - 11:00 <br>
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>KARATE</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/KT.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>MARCO ANTONIO SOSA GARCÍA</h3>
                    <h4>442 634 6470</h4>
                    <p>
                        <strong> K.O. Karate and Martial Center (Camino a  Los 
                        Olvera 144-Altos, El Pueblito, Qro.)</strong><br>
                        Lunes y Miércoles 18:00 - 20:00 <br>
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>LUCHA UNIVERSITARIA</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/LU.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>JUAN CARLOS LINARES VALDÉS</h3>
                    <h4>442 498 9945</h4>
                    <p>
                        <strong>Gimnasio de Lucha (Parque Querétaro 2000)</strong><br>
                        Lunes a Viernes 07:00 - 08:30 y 15:30-17:00 <br>
                        Sábado 09:00 - 11:00 <br>
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>TENIS DE MESA</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/TM.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>GENARO ALFONSO AYALA GARCÍA</h3>
                    <h4>55 7673 3398</h4>
                    <p>
                        <strong>Gimnasio de Tenis de Mesa (Parque Querétaro 2000)</strong><br>                       
                        Lunes y Miércoles 07:00 - 09:00 y 18:00 - 20:00 <br>
                        Sábado 11:00 - 13:00 <br>
                    </p>
                    
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>TIRO CON ARCO</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/TCA.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>KAREN ADRIANA MEZA ALVAREZ</h3>
                    <h4>442 136 8408</h4>
                    <p>
                        <strong>Cabecera Estadio Universitario (Centro Universitario)</strong><br>
                        Martes y Jueves 16:00 - 18:00 <br>                         
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>BÁSQUETBOL FEMENIL</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/BF.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>JAIME RIVAS MÁRQUEZ</h3>
                    <h4>442 352 5463</h4>
                    <p>
                        <strong>Auditorio (Ex Prepa)</strong><br>
                        Lunes, Miércoles y Viernes 18:30 - 20:30 <br>
                        Sábado 10:00 - 12:00 <br>
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>BÁSQUETBOL VARONIL</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/BV.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>ARTURO SÁNCHEZ ACEVES</h3>
                    <h4>442 440 5196</h4>
                    <p>
                        <strong>Auditorio (Ex Prepa)</strong><br>
                        Lunes, Miércoles y Viernes 20:30 - 22:30 <br>
                        Sábado 12:00 - 14:00 <br>
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>BEISBOL/SOFTBOL</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/BB.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>LUIS ENRIQUE LEAL GUERRERO</h3>
                    <h4>442 143 6040</h4>
                    <p>
                        <strong>Campo de Béisbol (Campus Corregidora)</strong><br>
                        Lunes, Miércoles y Viernes 20:30 - 22:30 <br>
                        Jueves 16:00 - 19:00 <br>
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>FÚTBOL ASOCIACIÓN FEMENIL</h2>
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E8_.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>ALEJANDRO PALOMARES MARTÍNEZ</h3>
                    <h4>442 264 9400</h4>
                    <p>
                        <strong>Estadio Universitario (Centro Universitario)</strong><br>
                        Lunes a Viernes 16:00 - 18:00 <br>                       
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>FÚTBOL ASOCIACIÓN VARONIL</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/FAV.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>NOÉ TERÁN FLORES</h3>
                    <h4>442 287 9719</h4>
                    <p>
                        <strong>Estadio Universitario (Centro Universitario)</strong><br>
                        Martes a Jueves 16:00 - 18:00 <br>                         
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>FÚTBOL BARDAS</h2>
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E10_.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>JOSÉ FÉLIX CHÁVEZ RODRÍGUEZ</h3>
                    <h4>442 157 7053</h4>
                    <p>
                        <strong>Cancha Fútbol Rápido FCS (Centro Universitario)</strong><br>
                        Jueves. Miércoles y Viernes 15:00 - 17:00 <br>                         
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>HANDBALL</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/HB.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>JUAN CARLOS MAYA CRUZ</h3>
                    <h4>442 421 9495</h4>
                    <p>
                        <strong>Gimnasio Multiusos - Centro de Raqueta 
                        (Parque Querétaro 2000)</strong><br>
                        Lunes a Viernes 17:00 - 21:00 <br>
                        Sábado 09:00 - 11:00                       
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>VOLEIBOL DE SALA</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/VSF.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>HÉCTOR JAVIER VILLANUEVA RODRÍGUEZ</h3>
                    <h4>442 145 7709</h4>
                    <p>
                        <strong>Auditorio LEF y CD (Campus Corregidora)</strong><br>
                        Lunes, Martes y Miércoles 20:00 - 22:30 <br>                         
                    </p>
                    <p>
                        <strong>Auditorio (Campus Aeropuerto)</strong><br>
                        Jueves 18:00 - 22:00 <br>                         
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>VOLEIBOL DE PLAYA</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Selecciones Universitarias/VPV.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>NATALIA RUTH PALMA SALAZAR </h3>
                    <h4>442 142 2238</h4>
                    <p>
                        <strong>Cancha de Voleibol de Playa (Parque Querétaro 
                        2000)</strong><br>
                        Martes y Jueves 19:00 - 22:00 <br>
                        Sábado 09:00 - 16:00                         
                    </p>
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>eSports</h2>
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E2_.jpg" />
                </section>
                <section class="cardSide align-start">
                    <h3>RICARDO MATA ANGUIANO </h3>
                    <h4> 442 611 5946</h4>
                </section>
            </article>
        </section>
    </main>
    <?php get_template_part('template-parts/footer');  ?>
</body>

</html>