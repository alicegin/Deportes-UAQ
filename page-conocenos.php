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
            <img src="http://localhost:10004/wp-content/uploads/2024/08/C1.png">      
        </div>
        <section class="mainRow">
            <h2>¿Quiénes SOMOS?</h2>
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
            <h2>¿QUE HACEMOS?</h2>
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
            <h2>VALORES</h2>
            <section class="infoContainer" style="display: flex;">
                <article class="cardContainer">
                    <h3>VALOR 1</h3>
                    <p>Agregar texto</p>
                </article>
                <article class="cardContainer">
                    <h3>VALOR 2</h3>
                    <p>Agregar texto</p>
                </article>
                <article class="cardContainer">
                    <h3>VALOR 3</h3>
                    <p>Agregar texto</p>
                </article>
                <article class="cardContainer">
                    <h3>VALOR 4</h3>
                    <p>Agregar texto</p>
                </article>
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

    <?php get_template_part('template-parts/footer'); ?>
</body>

</html>