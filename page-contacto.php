<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php
    /* Template Name: Contacto */
    wp_head();
    wp_footer();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php
    /* Template Name: Selecciones Universitarias */
    get_template_part('template-parts/header');
    ?>
    <main>
        <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/background_contacto-scaled.jpg" alt="deportes UAQ" />
        <section class="infoContainer">
            <article class="infoContent">
                <div class="infoContacto">
                    <h2>Dra. Silvia Lorena Amaya Llano</h2>
                    <p> (442) 192-12-00, Extensión 3100</p>
                </div>
                <p class="infoPuesto"><strong>Rectora</strong></p>
            </article>
            <article class="infoContent">
                <div class="infoContacto">
                    <h2>Dra. María Antonieta Mendoza Ayala</h2>
                    <p>(442) 192-12-00, Extensión 3501, 3502, 3508<br> <a href="https://dvs.uaq.mx/">https://dvs.uaq.mx/</a></p>
                </div>
                <p class="infoPuesto"><strong>Secretaría de Vinculación y Servicios Universitarios</strong></p>
            </article>
            <article class="infoContent">
                <div class="infoContacto">
                    <h2>Lic. Félix Alberto Capilla Pérez</h2>
                    <p> deportesuaq@live.com.mx</p>
                </div>
                <p class="infoPuesto"><strong>Coordinador General del Deporte</strong></p>
            </article>
            <article class="infoContent">
                <div class="infoContacto">
                    <h2>T. Karen Adriana Meza Álvarez</h2>
                    <p>(442) 192-12-00, Extensión 3520<br> especialización.uaq@gmail.com</p>
                </div>
                <p class="infoPuesto"><strong>Coordinadora Especialización Deportiva</strong></p>
            </article>
            <article class="infoContent">
                <div class="infoContacto">
                    <h2>LFT. Jhoana Paola Rodríguez Gaytán </h2>
                    <p>(442) 335 0813<br> ftdeportesuaq@gmail.com</p>
                </div>
                <p class="infoPuesto"><strong>Responsable Fisioterapia Deporte Universitario</strong></p>
            </article>
            <article class="infoContent">
                <div class="infoContacto">
                    <h2>Lic. Ana Guadalupe Arguello Mejia </h2>
                    <p>464 205 95 54<br> armejana@gmail.com</p>
                </div>                
            </article>
            <article class="infoContent">
                <div class="infoContacto">
                    <h2>Juan González Jayme</h2>
                    <p>442 411 0004<br> psicologiawolfsburg@gmail.com</p>
                </div>
                <p class="infoPuesto"><strong>Responsable del área de Psicologia Deportiva</strong></p>
            </article>
            <article class="infoContent">
                <div class="infoContacto">
                    <h2>Lic. Sofía Berrueta Molina </h2>
                    <p>443 224 9414<br>fisioberrueta@gmail.com</p>
                </div>
                <p class="infoPuesto"><strong>Responsable del área de psicopedagogía</strong></p>
            </article>
        </section>
    </main>


</body>

</html>