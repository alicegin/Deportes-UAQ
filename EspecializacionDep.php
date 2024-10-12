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
</main>

