<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/mainStyle.css'?>>
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/headerStyle.css'?>>
</head>
<body>
    <div>
                <!--Menú de navegación que depende de la dimensión de la pantalla (se ve en su css "mainStyle.css")-->
        <nav>
            <!--Visualización para una ventana ancha-->
            <div class="separador">
                <a class="hideMenu">GATOS SALVAJES
                </a>
                <!--Los botones para abrir y cerrar no salen hasta que la dimensión de la pantalla sea 965px o menor-->
                <button id="openButton" class="open-btn">
                <span style="font-size: 25px;align-self: center;">
                &#9776; <!-- Símbolo de hamburguesa -->
                </span>
                <p class="titulo-drawer">MENÚ</p>

                </button>
            </div>
            <div class="separador">
                <div class="hideMenu">
                    <a href="<?php echo home_url('/especializacion-deportiva'); ?>">ESPECIALIZACIÓN DEPORTIVA</a>
                    <a href="<?php echo home_url('/deportes-para-todes'); ?>">DEPORTES PARA TODES</a>
                    <a class="link" href="<?php echo home_url('/salon-de-la-fama'); ?>">SALÓN DE LA FAMA</a>
                    <a href="<?php echo home_url('/instalaciones'); ?>">INSTALACIONES</a>
                    <a href="<?php echo home_url('/e-sports'); ?>">e-SPORTS</a>
                </div>
                           
            </div>
                    <!--Visualización para una ventana estrecha según lo que dice el css (@media (max-width: 965px))-->
            <div id="drawer" class="drawer">
                <button id="closeButton" class="close-btn">&#x2715;</button>
                <p class="titulo-drawer">MENÚ</p>
                <a class="link" href="<?php echo home_url('/especializacion-deportiva'); ?>">ESPECIALIZACIÓN DEPORTIVA</a>
                <a class="link" href="<?php echo home_url('/deportes-para-todes'); ?>">DEPORTES PARA TODES</a>
                <a class="link" href="<?php echo home_url('/salon-de-la-fama'); ?>">SALÓN DE LA FAMA</a>
                <a class="link" href="<?php echo home_url('/instalaciones'); ?>">INSTALACIONES</a>
                <a class="link" href="<?php echo home_url('/e-sports'); ?>">e-SPORTS</a>
            </div>
                <!--Para poder poner encima el menú estilo drawer se necesita tomar la medida completa, altura y anchura de esta página-->
            <div id="backdrop" class="backdrop"></div>
        </nav>
         <!--Dentro de script.js está pineada section, no deja de estar en pantalla aunque se haga scroll-->
        <section>
            <div class="pineada">
                <!--atletas se va un 20% abajo para que tenga un poco de animación al hacer scroll-->
                <img class="atletas" src="http://deportesuaq.mx/wp-content/uploads/2025/01/W_-banner-selecciones.png">
                <div class="dentro-pineada">

                    <!--Imagen de fondo de rectoría en CU-->
                    <img class="imagen" src="http://deportesuaq.mx/wp-content/uploads/2024/10/UAQ2.jpg">
                    
                    <!--caja tiene la altura de pineada, según el css que es de el alto de la ventana.
                         
                         En el script la traslada hacia arriba con la cantidad de la altura de la pantalla,
                         esto para que no aparezca cuando se inicie la página y
                         permina una animación al hacer scroll.-->
                    <div class="caja">
                        <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/LOGOTIPO-GS.png">
                    </div>
                </div>
            </div>
    
            <!--Este elemento se encuentra hasta en final de la página con el scroll solo muestra la imagen de uaqDeportes-->
            <div class="trigger">
                <div class="trigger-container">
                    <img class="uaqDeportes" src="http://deportesuaq.mx/wp-content/uploads/2024/10/UAQDeportes.png">
                </div>
            </div>
        </section>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
    <script src=<?php echo get_template_directory_uri() . '/js/inicio/script.js'?> ></script>
    <script src=<?php echo get_template_directory_uri() . '/js/drawer.js'?> ></script>

<!--Función para hacer en automático el scroll-->
    <script>
  $(document).ready(function () {
    // Asegurar que siempre inicie en la parte superior
    $(window).on('load', function () {
      $('html, body').scrollTop(0);
    });

    // Función de scroll automático hacia abajo
    function autoScroll() {
      $('html, body').animate(
        { scrollTop: $(document).height() - $(window).height() },
        1000, // Tiempo en milisegundos (10 segundos en este caso)
        'linear'
      );
    }

    autoScroll(); // Iniciar el scroll automático
  });
</script>



</body>
</html>