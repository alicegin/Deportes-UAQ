<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php
    /* Template Name: gatienda */
    wp_head();
    wp_footer();
    ?>
</head>
<body>
    <main>
        <header class="headerGatienda" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/gatienda/fondoHeader.jpeg);">
            <section class="mainCardsContainer">
                <article class="mainCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/gatienda_p5.jpg" alt="GATIENDA">
                    </div>
                    <section class="infoCard">
                        <h1>Primer GATIENDA</h1>
                        <p>Recordando uno de nuestros primeros artículos</p>
                    </section>
                </article>
                <article class="mainCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/gatienda_p5.jpg" alt="GATIENDA">
                    </div>
                    <section class="infoCard">
                        <h1>Primer GATIENDA</h1>
                        <p>Recordando uno de nuestros primeros artículos</p>
                    </section>
                </article>
                <article class="mainCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/gatienda_p5.jpg" alt="GATIENDA">
                    </div>
                    <section class="infoCard">
                        <h1>Primer GATIENDA</h1>
                        <p>Recordando uno de nuestros primeros artículos</p>
                    </section>
                </article>
            </section>
            <article class="headerText">
                <h1>GATIENDA</h1>
                <p>Ven a visitarnos y conoce nuestros productos universitarios</p>
                <button onclick="window.location='#cardsContainer'">Ver productos</button>
            </article>
        </header>
        <section id="cardsContainer">
            <section class="etiquetasContainer">
                <label class="etiqueta">Todos</label>
                <label class="etiqueta">Ropa</label>
                <label class="etiqueta">Hogar</label>
                <label class="etiqueta">Escolar</label>
            </section>
            <section class="cardsContent">
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/gatienda_p2.jpg" alt="GATIENDA">
                    </div>
                    <section class="infoCard">
                        <h1>Toalla GATIENDA</h1>
                        <p>Descubre nuestros colores de porta credenciales</p>
                    </section>
                </article>
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/gatienda_p1.jpg" alt="GATIENDA">
                    </div>
                    <section class="infoCard">
                        <h1>Termo GATIENDA</h1>
                        <p>Ideal para tu día a día, conserva fresca tu agua</p>
                    </section>
                </article>
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/gatienda_p3.jpg" alt="GATIENDA">
                    </div>
                    <section class="infoCard">
                        <h1>Googles GATIENDA</h1>
                        <p>Luce cool con las nuevas sudaderas Gatos Salvajes</p>
                    </section>
                </article>
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/gatienda_p4.jpg" alt="GATIENDA">
                    </div>
                    <section class="infoCard">
                        <h1>Vaso GATIENDA</h1>
                        <p>Dale un toque de alegría a tus apuntes diarios</p>
                    </section>
                </article>
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/gatienda_p6.jpg" alt="GATIENDA">
                    </div>
                    <section class="infoCard">
                        <h1>Libretas GATIENDA</h1>
                        <p>Dale un toque de alegría a tus apuntes diarios</p>
                    </section>
                </article>
            </section>
        </section>
    </main>
</body>
</html>