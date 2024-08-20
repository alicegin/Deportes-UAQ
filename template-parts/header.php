<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="titulo">
        <img src="http://localhost:10004/wp-content/uploads/2024/08/A1.png" class="logo">
        <h1> <?php the_title(); ?></h1>
        <img src="http://localhost:10004/wp-content/uploads/2024/08/A2.png" class="logo">
    </div>
<header>
    <nav>
        <div class="navbar-content">
        <button class="navbar-toggler" aria-label="Toggle navigation">
            &#9776; <!-- Símbolo de hamburguesa -->
          </button>
            <div class="navbar-menu">
            <a href="<?php echo home_url('/conocenos'); ?>">CONÓCENOS</a>
            <a href="<?php echo home_url('/condde'); ?>">CONDDE</a>
            <a href="<?php echo home_url('/ciencias-aplicadas') ?>">CIENCIAS APLICADAS</a>
            <a href="<?php echo home_url('/selecciones-universitarias'); ?>">SELECCIONES UNIVERSITARIAS</a>
            <a href="<?php echo home_url('/documentos'); ?>">DOCUMENTOS</a>
            <a href="<?php echo home_url('/contacto') ?>">CONTACTO</a>
            </div>
        </div>
    </nav>
</header>
<script>
    const toggler = document.querySelector('.navbar-toggler');
    const menu = document.querySelector('.navbar-menu');
  
    toggler.addEventListener('click', () => {
      menu.classList.toggle('active');
    });
  </script>
</body>
