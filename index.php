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
            <div class="separador reducido">
                <a>GATOS S.</a>
            </div>
            <div class="separador hideMenu">
                <a class="hideMenu">GATOS SALVAJES</a>
            </div>
            <div class="separador">
                <div class="hideMenu">
                    <a href="<?php echo home_url('/especializacion-deportiva'); ?>">Especialización deportiva</a>
                    <a href="<?php echo home_url('/deportes-para-todos'); ?>">Deportes para Todos</a>
                    <a href="">Salón de la Fama</a>
                    <a href="<?php echo home_url('/instalaciones'); ?>">Instalaciones</a>
                    <a href="">E-sports</a>
                </div>
                           
                <div class="reducido">
                    <a href="<?php echo home_url('/especializacion-deportiva'); ?>">ED</a>
                    <a href="<?php echo home_url('/deportes-para-todos'); ?>">DpT</a>
                    <a href="">SF</a>
                    <a href="<?php echo home_url('/instalaciones'); ?>">I</a>
                    <a href="">E-sports</a>
                </div>
            </div>
        </nav>
        <section>
            <div class="pineada">
                <img class="atletas" src=<?php echo get_template_directory_uri() . '/img/inicio/atletas.png'?>>
                <div class="dentro-pineada">
                    <img class="imagen" src=<?php echo get_template_directory_uri() . '/img/inicio/UAQ2.jpg'?>>
                    <div class="caja">
                        <h1 class="gatos">GATOS</h1>
                        <h1 class="gatos">SALVAJES</h1>
                    </div>
                </div>
            </div>
    
            <div class="espacio">
    
            </div>
            
            <div class="trigger">
                <div class="trigger-container">
                    <img class="uaqDeportes" src=<?php echo get_template_directory_uri() . '/img/inicio/UAQDeportes.png'?>>
                </div>
            </div>
        </section>
    </div>





    <div class="siguenosSeccion">
        <div class="cuerpo">
        <div class="scroll">
            <div class="elementosScroll">
            <h1>SÍGUENOS EN NUESTRAS REDES</h1>
            </div>
        </div>
        <div class="redesSociales">
            <a href="https://www.facebook.com/uaqdeportes" class="card">
                <h1>FACEBOOK</h1>
                <p>UAQ Deporte Universitario</p>
                <img src=<?php echo get_template_directory_uri() . '/img/header/facebook.svg'?>>
            </a>
            <a href="https://www.instagram.com/uaqdeportes" class="card">
                <h1>INSTAGRAM</h1>
                <p>@uaqdeportes</p>
                <img src=<?php echo get_template_directory_uri() . '/img/header/instagram.svg'?>>
            </a>
            <a href="https://www.youtube.com/@uaqdeportes" class="card">
                <h1>YOUTUBE</h1>
                <p>UAQ Deportes</p>
                <img src=<?php echo get_template_directory_uri() . '/img/header/youtube.svg'?>>
            </a>
            <a href="https://x.com/deportesuaq" class="card">
                <h1>X</h1>
                <p>@Deportes UAQ</p>
                <img src=<?php echo get_template_directory_uri() . '/img/header/x.svg'?>>
            </a>
        </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src=<?php echo get_template_directory_uri() . '/js/inicio/script.js'?> ></script>
</body>
</html>