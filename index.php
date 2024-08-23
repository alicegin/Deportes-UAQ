<?php get_template_part('template-parts/header'); ?>
<main>
    <!-- Contenido aquí -->
    <?php
    include 'template-parts/slider.php';

    $imagenes = [
      'http://localhost:10004/wp-content/uploads/2024/08/1A-scaled.jpg',
      'http://localhost:10004/wp-content/uploads/2024/08/2A.jpg',
      'http://localhost:10004/wp-content/uploads/2024/08/3A.jpg'
  ];


  echo generarCarrusel($imagenes);
    
    ?>
    <section class="con">
      <div class="contenedorCentrar" id="socialMedia">
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuaqdeportes&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1835712586922845" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        <iframe src="https://widget.taggbox.com/161494" style="border:none;" width="340" height="500"></iframe>
      </div>
    </section>
</main>
<?php get_template_part('template-parts/footer'); ?>
