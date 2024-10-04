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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap');
        
        a{
            text-decoration: none;
            color: white;
        }

        main {
            position: relative;
            width: 100%;
            height: 100%;
        }

        main::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0; 
            background-color: rgb(0 84 166 / 25%);
            z-index: -1;
        }

        main img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        main .infoContainer {
            width: 100%;
            z-index: 10;
            padding: 80px;
        }

        main .infoContainer p {
            font-size: clamp(16px, 18px, 20px);
            font-family: "Poppins", sans-serif;
            color: #fdfdfd;
        }

        main .infoContainer h2 {
            font-size: calc((2.2 - 1) * 1.2vw + 1rem);
            line-height: calc(1.4em * (1 + (1 - 2.8)/25));
            font-family: "SUSE", sans-serif;
            color: #fdfdfd;   
            margin: 0;     
        }       
        
        main .infoContainer .infoContent:not(:last-child) {
            margin-bottom: 60px;
        }

        @media(max-width: 425px) {
            main .infoContainer {
                padding: 80px 40px;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php
        /* Template Name: Selecciones Universitarias */
        get_template_part('template-parts/header');
    ?>
    <main>
        <img src="<?php echo get_template_directory_uri(); ?>/img/background_contacto.jpg" alt="deportes UAQ" />
        <section class="infoContainer">
            <article class="infoContent">
                <h2>Dra. Silvia Lorena Amaya Llano</h2>
                <p> (442) 192-12-00, Extensión 3100</p>
            </article>
            <article class="infoContent">
                <h2>Dra. María Antonieta Mendoza Ayala</h2>
                <p>(442) 192-12-00, Extensión 3501, 3502, 3508<br> <a href="https://dvs.uaq.mx/">https://dvs.uaq.mx/</a></p>
            </article>   
            <article class="infoContent">
                <h2>Lic. Félix Alberto Capilla Pérez</h2>
                <p> deportesuaq@live.com.mx</p>
            </article>
            <!--<article class="infoContent">
                <h2>T. Karen Adriana Meza Álvarez</h2>
                <p>(442) 192-12-00, Extensión 3520<br> especialización.uaq@gmail.com</p>
            </article>
            <article class="infoContent">
                <h2>LFT. Jhoana Paola Rodríguez Gaytán </h2>
                <p>(442) 335 0813<br> ftdeportesuaq@gmail.com</p>
            </article>
            <article class="infoContent">
                <h2>Lic. Ana Guadalupe Arguello Mejia </h2>
                <p>464 205 95 54<br> armejana@gmail.com</p>
            </article>
            <article class="infoContent">
                <h2>Juan González Jayme</h2>
                <p>442 411 0004<br> psicologiawolfsburg@gmail.com</p>
            </article>
            <article class="infoContent">
                <h2>Lic. Sofía Berrueta Molina </h2>
                <p>443 224 9414<br>fisioberrueta@gmail.com</p>
            </article>-->                 
        </section>
    </main>


</body>

</html>