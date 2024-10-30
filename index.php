<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/mainStyle.css'?>>
</head>
<body>
    <div>

        <nav>
            <div class="separador">
                <a class="hideMenu">GATOS SALVAJES
                </a>
                <button id="openButton" class="open-btn">
                <span style="font-size: 25px;align-self: center;">
                &#9776; <!-- Símbolo de hamburguesa -->
                </span>
                <p class="titulo-drawer">MENÚ</p>

                </button>
            </div>
            <div class="separador">
                <div class="hideMenu">
                    <a href="<?php echo home_url('/especializacion-deportiva'); ?>">Especialización deportiva</a>
                    <a href="<?php echo home_url('/deportes-para-todes'); ?>">Deportes para Todes</a>
                    <a href="">Salón de la Fama</a>
                    <a href="<?php echo home_url('/instalaciones'); ?>">Instalaciones</a>
                    <a href="">E-sports</a>
                </div>
                           
            </div>
            <div id="drawer" class="drawer">
        <button id="closeButton" class="close-btn">&#x2715;</button>
        <p class="titulo-drawer">MENÚ</p>
          <a class="link" href="<?php echo home_url('/especializacion-deportiva'); ?>">Especialización deportiva</a>
          <a class="link" href="<?php echo home_url('/deportes-para-todes'); ?>">Deportes para Todes</a>
          <a class="link" href="">Salón de la Fama</a>
          <a class="link" href="<?php echo home_url('/instalaciones'); ?>">Instalaciones</a>
          <a class="link" href="">E-sports</a>
      </div>
      
      <div id="backdrop" class="backdrop"></div>
        </nav>
        <section>
            <div class="pineada">
                <img class="atletas" src="http://deportesuaq.mx/wp-content/uploads/2024/10/atletas.png">
                <div class="dentro-pineada">
                    <img class="imagen" src="http://deportesuaq.mx/wp-content/uploads/2024/10/UAQ2.jpg">
                    <div class="caja">
                        <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/LOGOTIPO-GS.png">
                    </div>
                </div>
            </div>
    
            <div class="espacio">
    
            </div>
            
            <div class="trigger">
                <div class="trigger-container">
                    <img class="uaqDeportes" src="http://deportesuaq.mx/wp-content/uploads/2024/10/UAQDeportes.png">
                </div>
            </div>
        </section>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src=<?php echo get_template_directory_uri() . '/js/inicio/script.js'?> ></script>
    <script src=<?php echo get_template_directory_uri() . '/js/drawer.js'?> ></script>
</body>
</html>