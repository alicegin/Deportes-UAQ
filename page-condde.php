<?php
/* Template Name: CONDDE */
get_template_part('template-parts/header');
?>

<main>
    <div class="contenedorCentrar">
        <img src="http://localhost:10004/wp-content/uploads/2024/08/D1.png">
    </div>

    <section class="contenido">
        <div class="subtitulo">
        <h1>¿Qué es el CONDDE?</h1>
        <a href="https://www.condde.org.mx/web/">
            <img src="http://localhost:10004/wp-content/uploads/2024/08/D2.jpeg"class="logo">
        </a>
        </div>
        <p>
        Para reemplazar cualquier marcador de posición de texto (como este), basta con que haga clic en él y comience a escribir. Creemos que el formato de este párrafo tiene un aspecto
        excelente tal y como se ha definido. Sin embargo, si quiere personalizarlo un poco para darle un toque personal, puede cambiar las fuentes con un solo clic.
        </p>
    </section>
    <div class="carouselMargin">
    <?php
    include 'template-parts/slider.php';

    $imagenes = [
      'http://localhost:10004/wp-content/uploads/2024/08/1A-scaled.jpg',
      'http://localhost:10004/wp-content/uploads/2024/08/2A.jpg',
      'http://localhost:10004/wp-content/uploads/2024/08/3A.jpg'
  ];


  echo generarCarrusel($imagenes);
    
    ?>
    </div>
    
    
</main>
<?php get_template_part('template-parts/footer');?>