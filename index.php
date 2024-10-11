<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/mainStyle.css'?>>
</head>
<body>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src=<?php echo get_template_directory_uri() . '/js/inicio/script.js'?> ></script>
</body>
</html>