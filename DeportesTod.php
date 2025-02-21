
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes para todes</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/deportesTodos.css">
</head>
<body>
    <?php
        /* Template Name: Deportes para todos */
        get_template_part('template-parts/headerDPT');
    ?>

    <main>
        <!-- mainPart: agrugar los contenedores principales -->
        <!-- manPartInfo: diferenciar el contenedor principal para mostrar información -->
        <section class="mainPart manPartInfo">
            <div class="imgContainer">
                <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/widgetDPT.jpeg" alt="Deportes UAQ" />
            </div>
            <div class="infoContainer">
                <h1>Deportes para todes</h1>
                <p>Promover una vida saludable entre la comunidad estudiantil y sociedad en general, a través de la organización de eventos que fomentan la práctica de actividad física y deportiva, tales como, Ligas Deportivas Escolares y eventos especiales</p>
            </div>
        </section>
        <!-- mainPartOpciones: diferenciar el contenedor para las tarjetas principales -->
        <section class="mainPart mainPartOpciones">
            <article>
                <div class="imgContainerDPT">
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/VOLEIBOL_FEMENIL.jpg" alt="Copa Valores" />                    
                </div>
                <h2 onclick="window.location.href='copa-valores'">Copa Valores 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                </h2>
            </article>
            <article>
                <div class="imgContainerDPT">
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/UAQtivate-1.jpeg" alt="Copa Valores" />                    
                </div>
                <h2 onclick="window.location.href='uaqtivate'">Cultura Física 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                </h2>
            </article>
            <article>
                <div class="imgContainerDPT">
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/voleiball.jpg" alt="Copa Valores" />                    
                </div>
                <h2 onclick="window.location.href='indet'">INDET 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                </h2>
            </article>
            <article>
                <div class="imgContainerDPT">
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/12/Gatermo_FFFFFF_3-scaled.jpg" alt="Copa Valores" />                    
                </div>
                <h2 onclick="window.location.href='gatienda'">UAQtívate 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                </h2>
            </article>
        </section>
    </main>
</body>
</html>