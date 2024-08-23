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
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E11_.jpg" />
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
                </section>
            </article>
            <article class="cardContainer flex">
                <section class="cardSide">
                    <h2>ATLETISMO</h2>
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E3_.jpg" />
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
                    <h2>TENIS DE MESA</h2>
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E9_.jpg" />
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
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E5_.jpg" />
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
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E6_.jpg" />
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
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E4_.jpg" />
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
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E10_.jpg" />
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
                    <h2>VOLEIBOL DE SALA</h2>
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/E2_.jpg" />
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
        </section>
    </main>
    <?php get_template_part('template-parts/footer');  ?>
</body>

</html>