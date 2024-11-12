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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.dataTables.min.css" crossorigin="anonymous" />
    <style>
        .cardContainer {
            margin: 10px 15px;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php
    /* Template Name: Conócenos */
    get_template_part('template-parts/header');
    ?>

    <main>
        <div class="contenedorCentrar">
            <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/C1.png">
            <a id="btnVerMas" href="#principalContent">Conoce Nuestra Historia</a>
        </div>
        <section id="principalContent" class="mainRow">
            <h2 id="mainTitle" style="margin-top: 150px;">¿Quiénes SOMOS?</h2>
            <p>
                El Área de Especialización Deportiva es el departamento encargado de fomentar y promover el deporte en la universidad. Además, se encarga de dar seguimiento a las y los
                seleccionados de las distintas disciplinas deportivas a nivel estatal, regional, y nacional, así como en competencias internacionales del Consejo Nacional del Deporte de la Educación
                (CONDDE).
                El equipo de Especialización Deportiva está conformado por un grupo multidisciplinario de Ciencias Aplicadas al Deporte (CAD), que atiende las necesidades de las selecciones en
                áreas cruciales como fisioterapia, nutrición y psicología. Este equipo se complementa con un amplio grupo de entrenadores con vasta experiencia en sus respectivas disciplinas.
                El objetivo del área de Especialización Deportiva es asegurar la continuidad y el desarrollo de las actividades deportivas, para que los seleccionados puedan alcanzar sus metas y
                para que la Universidad se consolide como una institución líder en el ámbito deportivo a nivel estatal y más allá.
            </p>
        </section>
        <section class="mainRow">
            <h2>¿Qué HACEMOS?</h2>
            <p>
                El área de Especialización Deportiva se encarga de realizar la gestión, administración y seguimiento de todas las selecciones deportivas universitarias. Desde la afiliación y emisión de
                credenciales, hasta la inscripción y asistencia a las juntas previas, la calendarización de competencias, y la provisión del material deportivo oficial necesario. Además, se ocupa de la
                logística relacionada con el hospedaje, transporte y alimentación de los deportistas.<br><br>
                Asimismo, desarrolla estrategias para recopilar y gestionar toda la información deportiva universitaria a nivel estatal, regional y nacional. Investigando, recopilando y analizando los
                resultados deportivos, con el objetivo de proporcionar herramientas que impulsen el progreso de cada uno de los seleccionados.
                La labor de este equipo es atender las inquietudes, problemas y situaciones particulares de cada miembro de los equipos, buscando garantizar una experiencia deportiva
                satisfactoria dentro de la universidad. Se esfuerzan por potenciar el talento de cada uno de los seleccionados y asegurarse de que su desarrollo deportivo sea óptimo y gratificante.
            </p>
        </section>
        <section class="mainRow">
            <h2 style="margin-bottom: 22px;">NUESTROS VALORES</h2>
            <section class="valoresContainer">
                <div class="valorCard">
                    <p>AMISTAD</p>
                    <h5>La rivalidad y la competencia es parte del deporte, y esta no limita que pueda existir una amistad entre estudiantes universitarios, sin importar la institución. Las mejores amistades las forja el deporte.</h5>
                </div>
                <div class="valorCard">
                    <p>DIVERSIDAD</p>
                    <h5>Las, les y los seleccionados universitarios deberán valorar y aceptar las diferencias sexuales, ideológicas, étnicas, culturales o de pensamiento dentro de cada selección universitaria, entendiendo que la diversidad fortalece el rendimiento colectivo en el deporte.</h5>
                </div>
                <div class="valorCard">
                    <p>EQUIDAD</p>
                    <h5>El actuar con justicia y buscar un trato equitativo en todas sus interacciones deportivas, asegurándose de que todas y todos tengan las mismas oportunidades de participación y éxito.</h5>
                </div>
                <div class="valorCard">
                    <p>ESFUERZO Y SACRIFICIO</p>
                    <h5>Comprometerse con la dedicación, sacrificio y esfuerzo necesarios para mejorar su rendimiento y alcanzar las metas deportivas establecidas, entendiendo que el ámbito académico es clave para el éxito.</h5>
                </div>
                <div class="valorCard">
                    <p>HONESTIDAD</p>
                    <h5>Mantener la integridad en todas sus acciones deportivas, siendo honesto en la competencia y en el entrenamiento, respetando las reglas del juego.</h5>
                </div>
                <div class="valorCard">
                    <p>IGUALDAD</p>
                    <h5>Promover la igualdad de oportunidades en el equipo o selección, asegurando que todas, todes y todos tengan acceso a los mismos recursos, apoyo y oportunidades para desarrollar sus actividades deportivas.</h5>
                </div>
                <div class="valorCard">
                    <p>INCLUSIÓN</p>
                    <h5>Integrar a todas, todes y todos los integrantes de equipo o selección, independientemente de sus diferencias, creando un ambiente de respeto y apoyo mutuo en las actividades deportivas.</h5>
                </div>
                <div class="valorCard">
                    <p>RESPETO</p>
                    <h5>Tratar a las, les y los compañeros, entrenadores, administrativos, adversarios y público en general con consideración, decencia y cortesía, valorando las reglas del juego y la dignidad de cada individuo en el ámbito deportivo.</h5>
                </div>
                <div class="valorCard">
                    <p>RESPONSABILIDAD</p>
                    <h5>Cumplir con sus deberes académicos y compromisos deportivos con seriedad, asumiendo las consecuencias de sus actos dentro y fuera del campo de juego. Además, de representar a la universidad con orgullo.</h5>
                </div>
                <div class="valorCard">
                    <p>SOLIDARIDAD</p>
                    <h5>Apoyar a sus compañeros y compañeras en los momentos difíciles, fomentando la unidad y el trabajo en equipo dentro del deporte.</h5>
                </div>
                <div class="valorCard">
                    <p>TOLERANCIA</p>
                    <h5>Demostrar tolerancia hacia las diferentes opiniones, culturas y habilidades de sus compañeros, tanto en el deporte como en el ámbito académico. Además, de respetar a los árbitros o jueces, sabiendo que estos pueden equivocarse.</h5>
                </div>
                <div class="valorCard">
                    <p>TRABAJO Y ESPÍRITU EN EQUIPO</p>
                    <h5>Deberá colaborar de manera efectiva con sus compañeros para alcanzar las metas comunes del equipo, entendiendo que el éxito en el deporte es colectivo.</h5>
                </div>
            </section>
        </section>

        <!-- Feed de Facebook -->
        <!-- <div class="facebook-feed"> -->
        <!-- Pega aquí el código de embed proporcionado por Facebook -->
        <!-- <div class="fb-page" data-href="https://www.facebook.com/uaqdeportes" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/uaqdeportes" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/uaqdeportes">UAQ Deportes</a></blockquote>
            </div>
        </div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="Tj4H5kMi"></script> -->
    </main>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            let $mainTitle = $('#mainTitle');

            $('#valoresTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
                }
            })

            $('body').on('click', '#btnVerMas', function() {
                $mainTitle.css('margin-top', '95px');
            });

            $(window).on("scroll", function() {
                if ($(window).scrollTop() === 0) {
                    $mainTitle.css('margin-top', '150px');
                } else if ($(window).scrollTop() <= 100) {
                    $mainTitle.css('margin-top', '95px');
                }
            });
        });
    </script>
</body>

</html>