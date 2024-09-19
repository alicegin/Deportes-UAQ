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

<body <?php body_class(); ?>>
    <?php
    /* Template Name: gatienda */
    ?>
    <main>
        <header style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/fondoHeader.jpeg);">
            <section class="mainCardsContainer">
                <article class="mainCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article1.jpeg" alt="UAQ Store">
                    </div>
                    <section class="infoCard">
                        <h1>Primer UAQSTORE</h1>
                        <p>Recordando uno de nuestros primeros artículos</p>
                    </section>
                </article>
                <article class="mainCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article1.jpeg" alt="UAQ Store">
                    </div>
                    <section class="infoCard">
                        <h1>Primer UAQSTORE</h1>
                        <p>Recordando uno de nuestros primeros artículos</p>
                    </section>
                </article>
                <article class="mainCard">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article1.jpeg" alt="UAQ Store">
                    </div>
                    <section class="infoCard">
                        <h1>Primer UAQSTORE</h1>
                        <p>Recordando uno de nuestros primeros artículos</p>
                    </section>
                </article>
            </section>
            <article class="headerText">
                <h1>UAQ STORE</h1>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article2.jpeg" alt="UAQ Store">
                    </div>
                    <section class="infoCard">
                        <h1>Porta credencial</h1>
                        <p>Descubre nuestros colores de porta credenciales</p>
                    </section>
                </article>
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article3.jpeg" alt="UAQ Store">
                    </div>
                    <section class="infoCard">
                        <h1>Termo UAQSTORE</h1>
                        <p>Ideal para tu día a día, conserva fresca tu agua</p>
                    </section>
                </article>
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article4.jpeg" alt="UAQ Store">
                    </div>
                    <section class="infoCard">
                        <h1>Suéter Gato Salvaje</h1>
                        <p>Luce cool con las nuevas sudaderas Gatos Salvajes</p>
                    </section>
                </article>
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article5.jpeg" alt="UAQ Store">
                    </div>
                    <section class="infoCard">
                        <h1>Libretas UAQSTORE</h1>
                        <p>Dale un toque de alegría a tus apuntes diarios</p>
                    </section>
                </article>
                <article class="card">
                    <div class="imgContainer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article6.jpeg" alt="UAQ Store">
                    </div>
                    <section class="infoCard">
                        <h1>Libretas UAQSTORE</h1>
                        <p>Dale un toque de alegría a tus apuntes diarios</p>
                    </section>
                </article>
            </section>
        </section>
    </main>
</body>

</html>