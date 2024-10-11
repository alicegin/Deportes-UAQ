<?php 
/* Template Name: Especialización deportiva */
get_template_part('template-parts/header'); 

?>
<main>
    <!-- Contenido aquí -->
    <?php
    include 'template-parts/slider.php';
    
    $imagenes = [
      'http://deportesuaq.mx/wp-content/uploads/2024/07/1A-2-scaled.jpg',
      'http://deportesuaq.mx/wp-content/uploads/2024/07/3A-2.jpg',
      'http://deportesuaq.mx/wp-content/uploads/2024/07/4A-2-scaled.jpg',
      'http://deportesuaq.mx/wp-content/uploads/2024/07/5A-1.jpg',
      'http://deportesuaq.mx/wp-content/uploads/2024/07/6A-1.jpg'
  ];

  echo generarCarrusel($imagenes);
    
    ?>
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
            <img src=<?php echo get_template_directory_uri() . '/img/espDep/Facebook.png'?>>
        </a>
        <a href="https://www.instagram.com/uaqdeportes" class="card">
            <h1>INSTAGRAM</h1>
            <p>@uaqdeportes</p>
            <img src=<?php echo get_template_directory_uri() . '/img/espDep/Instagram.png'?>>
        </a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src=<?php echo get_template_directory_uri() . '/js/espDep/inicio.js'?> ></script>
</main>

