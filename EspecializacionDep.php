<?php 
/* Template Name: Especialización deportiva */
get_template_part('template-parts/header'); 

?>
<main>
    <!-- Contenido aquí -->
     <div class="portada">
        <div class="contenedorImgLottie">
          <iframe src="https://lottie.host/embed/e5fcebd6-5cac-430b-9ffd-f5598d19d66d/fx1Xv66RUC.json"></iframe>
          <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/1A-scaled.jpg"> 
        </div>
     </div>
     <div class="cajita">
        <div class="scroll">
          <h1>SÍGUENOS EN REDES SOCIALES</h1>
        </div>
     </div>
     <div class="rsPage">
        <article>
          <a href="https://www.facebook.com/uaqdeportes/">
            <h1>FACEBOOK</h1>
            <p>UAQ Deporte Universitario</p>
            <img src=<?php echo get_template_directory_uri() . '/img/header/facebook.svg'?>>
          </a>
        </article>
        <article>
          <a href="https://www.instagram.com/uaqdeportes/">
            <h1>INSTAGRAM</h1>
            <p>@uaqdeportes</p>
            <img src=<?php echo get_template_directory_uri() . '/img/header/instagram.svg'?>>
          </a>
        </article>
        <article>
          <a href="https://x.com/deportesuaq">
            <h1>X</h1>
            <p>@Deportes UAQ</p>
            <img src=<?php echo get_template_directory_uri() . '/img/header/x.svg'?>>
          </a>
        </article>
        <article>
          <a href="https://www.youtube.com/@uaqdeportes">
            <h1>YOUTUBE</h1>
            <p>UAQ Deportes</p>
            <img src=<?php echo get_template_directory_uri() . '/img/header/youtube.svg'?>>
          </a>
        </article>
      </div>
</main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src=<?php echo get_template_directory_uri() . '/js/espDep/inicio.js'?> ></script>

