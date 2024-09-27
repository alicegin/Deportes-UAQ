<?php
/* Template Name: CONDDE */
get_template_part('template-parts/header');
?>

<main>
    <div class="contenedorCentrar">
        <img src='http://deportesuaq.mx/wp-content/uploads/2024/08/D1.png'>
    </div>

    <section class="contenido">
        <div class="subtitulo">
        <h1>¿Qué es el CONDDE?</h1>
        <a href="https://www.condde.org.mx/web/">
            <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/D2.jpeg"class="logo">
        </a>
        </div>
        <p>
        El Consejo Nacional del Deporte de la Educación, A.C. (CONDDE) es la organización en México encargada de promover y coordinar el deporte en las instituciones de educación 
superior del país. Su objetivo principal es fomentar la práctica deportiva entre los estudiantes universitarios, organizando y supervisando diversas competencias deportivas a nivel 
regional y nacional, como la Universiada Nacional, que es el evento deportivo estudiantil más importante del país.
<br><br>
El CONDDE se encarga de establecer normas y reglamentos para las competencias deportivas universitarias, fomentar la formación y capacitación de entrenadores y árbitros, y 
promover el desarrollo integral de los estudiantes a través del deporte.
        </p>
    </section>
    <div class="carouselMargin">
    <?php
    include 'template-parts/slider.php';

    $imagenes = [
      'http://deportesuaq.mx/wp-content/uploads/2024/08/D2.jpg',
      'http://deportesuaq.mx/wp-content/uploads/2024/08/D5-scaled.jpg',
      'http://deportesuaq.mx/wp-content/uploads/2024/08/D6.jpg',
      'http://deportesuaq.mx/wp-content/uploads/2024/08/D7.jpg'
  ];


  echo generarCarrusel($imagenes);
    
    ?>
    </div>
    
    
</main>
<?php get_template_part('template-parts/footer');?>