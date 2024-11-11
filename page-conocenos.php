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
            <section class="tablaContainer">
                <table id="valoresTable" class="display">
                    <thead>
                        <tr>
                            <th>VALORES</th>
                            <th>DEPORTISTAS</th>
                            <th>ENTRENADORES</th>
                            <th>PÚBLICO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>AMISTAD</p>
                            </td>
                            <td>
                                <p>La rivalidad y la competencia es parte del deporte, y esta no limita que pueda existir una amistad entre estudiantes universitarios, sin importar la institución. Las mejores amistades las forja el deporte.</p>
                            </td>
                            <td>
                                <p>Los entrenadores universitarios son fundamentales para el desarrollo deportivo y académico de cada estudiante. El crear canales de comunicación fortalece no solo a la comunidad estudiantil, sino a todos.</p>
                            </td>
                            <td>
                                <p>La rivalidad potencia al deporte, pero respetar al adversario debe ser el objeto principal. Lo más importante es disfrutar, conocer y apoyar a nuestra comunidad.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>DIVERSIDAD</p>
                            </td>
                            <td>
                                <p>Las, les y los seleccionados universitarios deberán valorar y aceptar las diferencias sexuales, ideológicas, étnicas, culturales o de pensamiento dentro de cada selección universitaria, entendiendo que la diversidad fortalece el rendimiento colectivo en el deporte.</p>
                            </td>
                            <td>
                                <p>Fomentar un ambiente inclusivo donde cada seleccionado o seleccionada se sienta valorado por sus particularidades, y promover la diversidad como una ventaja competitiva.</p>
                            </td>
                            <td>
                                <p>Respetar y apoyar la diversidad en las actividades deportivas, reconociendo su impacto positivo en la convivencia y el desempeño.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>EQUIDAD</p>
                            </td>
                            <td>
                                <p>El actuar con justicia y buscar un trato equitativo en todas sus interacciones deportivas, asegurándose de que todas y todos tengan las mismas oportunidades de participación y éxito.</p>
                            </td>
                            <td>
                                <p>Los entrenadores deben garantizar condiciones justas para todos los deportistas, evitando favoritismos y asegurando que cada seleccionado tenga las mismas oportunidades de desarrollo.</p>
                            </td>
                            <td>
                                <p>Reconocer la importancia de la equidad en el deporte, apoyando un entorno donde todos tengan las mismas posibilidades de destacar.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>ESFUERZO Y SACRIFICIO</p>
                            </td>
                            <td>
                                <p>Comprometerse con la dedicación, sacrificio y esfuerzo necesarios para mejorar su rendimiento y alcanzar las metas deportivas establecidas, entendiendo que el ámbito académico es clave para el éxito.</p>
                            </td>
                            <td>
                                <p>Inspirar a través de su propio sacrificio y esfuerzo, guiando al equipo con disciplina y constancia hacia sus objetivos deportivos.</p>
                            </td>
                            <td>
                                <p>Valorar y apoyar el sacrificio y esfuerzo de cada seleccionado/a, reconociendo el trabajo y la dedicación empleada por cada uno de ellos.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>HONESTIDAD</p>
                            </td>
                            <td>
                                <p>Mantener la integridad en todas sus acciones deportivas, siendo honesto en la competencia y en el entrenamiento, respetando las reglas del juego.</p>
                            </td>
                            <td>
                                <p>Los entrenadores deben ser un ejemplo de transparencia y verdad, actuando con honestidad en todas las decisiones y situaciones dentro del equipo y la competencia.</p>
                            </td>
                            <td>
                                <p>Deben actuar con sinceridad y rectitud en el ámbito deportivo, promoviendo la honestidad como un valor fundamental tanto dentro como fuera del campo de juego.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>IGUALDAD</p>
                            </td>
                            <td>
                                <p>Promover la igualdad de oportunidades en el equipo o selección, asegurando que todas, todes y todos tengan acceso a los mismos recursos, apoyo y oportunidades para desarrollar sus actividades deportivas.</p>
                            </td>
                            <td>
                                <p>Deberá garantizar un trato igualitario para todos los deportistas, asegurando que no exista ningún tipo exclusión o discriminación dentro de los equipos representativos, entrenamientos o competencias.</p>
                            </td>
                            <td>
                                <p>Defender la igualdad en el deporte, apoyando iniciativas que promuevan la no discriminación y la equidad en todas las categorías y niveles.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>INCLUSIÓN</p>
                            </td>
                            <td>
                                <p>Integrar a todas, todes y todos los integrantes de equipo o selección, independientemente de sus diferencias, creando un ambiente de respeto y apoyo mutuo en las actividades deportivas.</p>
                            </td>
                            <td>
                                <p>Deberá diseñar y aplicar estrategias que aseguren la inclusión de todos los miembros del equipo representativo, fomentando así la participación activa y el sentido de pertenencia.</p>
                            </td>
                            <td>
                                <p>Fomentar la inclusión en las actividades deportivas, apoyando la participación de todas, todes y todos sin distinción alguna. Además, promover un ambiente acogedor.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>RESPETO</p>
                            </td>
                            <td>
                                <p>Tratar a las, les y los compañeros, entrenadores, administrativos, adversarios y público en general con consideración, decencia y cortesía, valorando las reglas del juego y la dignidad de cada individuo en el ámbito deportivo.</p>
                            </td>
                            <td>
                                <p>Enseñar y practicar el respeto mutuo dentro del equipo, estableciendo un ambiente donde se valore el respeto hacia los demás y las reglas del deporte.</p>
                            </td>
                            <td>
                                <p>Actuar con respeto hacia todos los involucrados en el deporte, desde los jugadores hasta el personal de apoyo, promoviendo un comportamiento ejemplar en eventos deportivos.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>RESPONSABILIDAD</p>
                            </td>
                            <td>
                                <p>Cumplir con sus deberes académicos y compromisos deportivos con seriedad, asumiendo las consecuencias de sus actos dentro y fuera del campo de juego. Además, de representar a la universidad con orgullo.</p>
                            </td>
                            <td>
                                <p>Asumir la responsabilidad de sus decisiones y acciones como líder del equipo, orientando a los deportistas hacia un comportamiento responsable y ético.</p>
                            </td>
                            <td>
                                <p>Ser consciente de sus responsabilidades como espectador o participante en el deporte, cumpliendo con ellas y apoyando un ambiente de respeto y fair play.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>SOLIDARIDAD</p>
                            </td>
                            <td>
                                <p>Apoyar a sus compañeros y compañeras en los momentos difíciles, fomentando la unidad y el trabajo en equipo dentro del deporte.</p>
                            </td>
                            <td>
                                <p>Deberá promover la solidaridad entre los deportistas, asegurando que todos se apoyen mutuamente en los desafíos y competiciones, fortaleciendo el espíritu de equipo.</p>
                            </td>
                            <td>
                                <p>Practicar la solidaridad en el ámbito deportivo, apoyando a los equipos y atletas en sus momentos de necesidad y vulnerabilidad.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>TOLERANCIA</p>
                            </td>
                            <td>
                                <p>Demostrar tolerancia hacia las diferentes opiniones, culturas y habilidades de sus compañeros, tanto en el deporte como en el ámbito académico. Además, de respetar a los árbitros o jueces, sabiendo que estos pueden equivocarse.</p>
                            </td>
                            <td>
                                <p>Fomentar un ambiente de tolerancia, donde cada miembro del equipo se sienta libre de expresar sus ideas y ser aceptado por sus diferencias, promoviendo la comprensión mutua tanto en el deporte (entrenamiento, partidos o competencias) como en el aula.</p>
                            </td>
                            <td>
                                <p>Practicar la tolerancia en eventos deportivos y académicos, apoyando un entorno donde se respete la diversidad de pensamientos y se promueva la convivencia pacífica y constructiva.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>TRABAJO Y ESPÍRITU EN EQUIPO</p>
                            </td>
                            <td>
                                <p>Deberá colaborar de manera efectiva con sus compañeros para alcanzar las metas comunes del equipo, entendiendo que el éxito en el deporte es colectivo.</p>
                            </td>
                            <td>
                                <p>Potenciar el espíritu de equipo y la colaboración entre los deportistas, asegurando que todos trabajen hacia los mismos objetivos y fomentando la cohesión del grupo.</p>
                            </td>
                            <td>
                                <p>Participar activamente en apoyar y motivar el trabajo en equipo en el deporte, valorando la colaboración como una herramienta esencial para el éxito.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
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