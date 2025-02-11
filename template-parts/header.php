<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Para que el nombre de la página que se estableció en WordPress-admin aparezca en el nombre de la pestaña-->
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php
  //Para poner el css en la página actual
  wp_head();
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
          <p class="titulo-drawer">MENÚ</p>
        </button>
        <!--Logo de Gatos Salvajes para regresar a la página index y logo de
         Especialización Deportiva para regresar a la página de Especialización Deportiva
         Para ventanas de 1200px o más grandes-->
        <div class="navbar-menu hideMenu menu-logos-principal">
          <a href="<?php echo home_url() ?>">
            <img class="logo" src="http://deportesuaq.mx/wp-content/uploads/2024/10/GS-44.png">
          </a>
          <a href="<?php echo home_url('/especializacion-deportiva'); ?>">
            <img class="logo" src="http://deportesuaq.mx/wp-content/uploads/2024/10/ED-LOGO-43.png">
          </a>
        </div>
        <!--Links de redireccionamiento a las demás páginas para ventanas de 1200px o más grandes-->
        <div class="navbar-menu hideMenu menu-principal-header">
          <a class="link" href="<?php echo home_url('/conocenos'); ?>">Conócenos</a>
          <a class="link" href="<?php echo home_url('/condde'); ?>">CONDDE</a>
          <a class="link" href="<?php echo home_url('/ciencias-aplicadas') ?>">Ciencias Aplicadas</a>
          <a class="link" href="<?php echo home_url('/selecciones-universitarias'); ?>">Selecciones Universitarias</a>
          <a class="link" href="<?php echo home_url('/documentos'); ?>">Documentos</a>
          <a class="link" href="<?php echo home_url('/contacto') ?>">Contacto</a>
        </div>
        <!--Redes sociales de UAQDeportes (funciona para cualquier dimensión de pantalla)-->
        <div class="navbar-menu hideMenu">
          <a href="https://www.facebook.com/uaqdeportes">
            <img class="redesHeader" src=<?php echo get_template_directory_uri() . '/img/header/facebook.svg' ?>>
          </a>
          <a href="https://www.instagram.com/uaqdeportes">
            <img class="redesHeader" src=<?php echo get_template_directory_uri() . '/img/header/instagram.svg' ?>>
          </a>
          <a href="https://www.youtube.com/@uaqdeportes">
            <img class="redesHeader" src=<?php echo get_template_directory_uri() . '/img/header/youtube.svg' ?>>
          </a>
          <a href="https://x.com/deportesuaq">
            <img class="redesHeader" src=<?php echo get_template_directory_uri() . '/img/header/x.svg' ?>>
          </a>
        </div>
      </div>
      <!-- inicio menu responsivo -->
      <div id="drawer" class="drawer">
        <button id="closeButton" class="close-btn">&#x2715;</button>
        <p class="titulo-drawer">MENÚ</p>
        <div class="logoMainContainer" onclick="window.location.href='<?php echo home_url() ?>'">
          <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/LOGOTIPO-GS.png" />  
        </div>
        <a class="link" href="<?php echo home_url('/especializacion-deportiva'); ?>">INICIO E.D.</a>
        <a class="link" href="<?php echo home_url('/conocenos'); ?>">CONÓCENOS</a>
        <a class="link" href="<?php echo home_url('/condde'); ?>">CONDDE</a>
        <a class="link" href="<?php echo home_url('/ciencias-aplicadas') ?>">CIENCIAS APLICADAS</a>
        <a class="link" href="<?php echo home_url('/selecciones-universitarias'); ?>">SELECCIONES UNIVERSITARIAS</a>
        <a class="link" href="<?php echo home_url('/documentos'); ?>">DOCUMENTOS</a>
        <a class="link" href="<?php echo home_url('/contacto') ?>">CONTACTO</a>
      </div>
      <!-- fin menu responsivo -->
      <div id="backdrop" class="backdrop"></div>
    </nav>
  </header>
  <script src=<?php echo get_template_directory_uri() . '/js/drawer.js' ?>></script>
</body>
<?php
function titulo($texto)
{
  return $texto;
}
?>