<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php
  wp_head();
  wp_footer();
  ?>
</head>
<style>
</style>
<body <?php body_class(); ?>>
  <header>
    <nav>
      <div class="navbar-content">
        <button id="openButton" class="open-btn">
          <span style="font-size: 25px;align-self: center;">
            &#9776; <!-- Símbolo de hamburguesa -->
          </span>
          <p class="titulo-drawer">MENU</p>

        </button>
        <div class="navbar-menu hideMenu">
        <a href="<?php echo home_url()?>">
          <img class="logo" src=<?php echo get_template_directory_uri() . '/img/header/GS-44.png'?>>
        </a>
        <a href="<?php echo home_url('/especializacion-deportiva'); ?>">
          <img class="logo" src=<?php echo get_template_directory_uri() . '/img/header/ED-LOGO-43.png'?>>
        </a>
        </div>
        
        <div class="navbar-menu hideMenu">
          <a class="link" href="<?php echo home_url('/conocenos'); ?>">CONÓCENOS</a>
          <a class="link" href="<?php echo home_url('/condde'); ?>">CONDDE</a>
          <a class="link" href="<?php echo home_url('/ciencias-aplicadas') ?>">CIENCIAS APLICADAS</a>
          <a class="link" href="<?php echo home_url('/selecciones-universitarias'); ?>">SELECCIONES UNIVERSITARIAS</a>
          <a class="link" href="<?php echo home_url('/documentos'); ?>">DOCUMENTOS</a>
          <a class="link" href="<?php echo home_url('/contacto') ?>">CONTACTO</a>
        </div>
        <div class="navbar-menu hideMenu">
          <a href="https://www.facebook.com/uaqdeportes">
            <img class="redesHeader" src=<?php echo get_template_directory_uri() . '/img/header/facebook.svg'?>>
          </a>
          <a href="https://www.instagram.com/uaqdeportes">
            <img class="redesHeader" src=<?php echo get_template_directory_uri() . '/img/header/instagram.svg'?>>
          </a>
          <a href="https://www.youtube.com/@uaqdeportes">
            <img class="redesHeader" src=<?php echo get_template_directory_uri() . '/img/header/youtube.svg'?>>
          </a>
          <a href="https://x.com/deportesuaq">
            <img class="redesHeader" src=<?php echo get_template_directory_uri() . '/img/header/x.svg'?>>
          </a>
        </div>
      </div>
      


      <div id="drawer" class="drawer">
        <button id="closeButton" class="close-btn">X</button>
        <p class="titulo-drawer">MENU</p>
          <a class="link" href="<?php echo home_url('/conocenos'); ?>">CONÓCENOS</a>
          <a class="link" href="<?php echo home_url('/condde'); ?>">CONDDE</a>
          <a class="link" href="<?php echo home_url('/ciencias-aplicadas') ?>">CIENCIAS APLICADAS</a>
          <a class="link" href="<?php echo home_url('/selecciones-universitarias'); ?>">SELECCIONES UNIVERSITARIAS</a>
          <a class="link" href="<?php echo home_url('/documentos'); ?>">DOCUMENTOS</a>
          <a class="link" href="<?php echo home_url('/contacto') ?>">CONTACTO</a>
      </div>
      
      <div id="backdrop" class="backdrop"></div>
    </nav>
  </header>
  <script src=<?php echo get_template_directory_uri() . '/js/drawer.js'?>></script> 
</body>
<?php 
  function titulo($texto){
    return $texto;
  }
?>