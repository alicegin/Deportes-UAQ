<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/headerDPTStyle.css">
  <?php
  wp_head();
  ?>
</head>

<body <?php body_class(); ?>>
  <header style="position:fixed; width:100%;">
    <nav>
      <div class="navbar-content">
        <button id="openButton" class="open-btn">
          <span style="font-size: 25px;align-self: center;">
            &#9776; <!-- Símbolo de hamburguesa -->
          </span>
          <p class="titulo-drawer">MENÚ</p>
        </button>
        <div class="navbar-menu hideMenu margenHeaderIz">
          <a href="<?php echo home_url() ?>">
            <img class="logo" src="http://deportesuaq.mx/wp-content/uploads/2024/10/GS-44.png">
          </a>
          <a href="<?php echo home_url('/deportes-para-todes'); ?>">
            <img class="logo" src="http://deportesuaq.mx/wp-content/uploads/2024/11/Deporte-para-Todes-.png">
          </a>
        </div>
        <div class="navbar-menu hideMenu menuDPT">
          <a class="link" href="<?php echo home_url('/copa-valores'); ?>">Copa Valores</a>
          <a class="link" href="<?php echo home_url('/uaqtivate'); ?>">UAQtívate</a>
          <a class="link" href="<?php echo home_url('/indet') ?>">INDET</a>
        </div>
        <div class="navbar-menu hideMenu redesSociales">
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
      </div>
      <!-- inicio menu responsivo -->
      <div id="drawer" class="drawer">
        <button id="closeButton" class="close-btn">&#x2715;</button>
        <p class="titulo-drawer">MENÚ</p>
        <div class="logoMainContainer" onclick="window.location.href='<?php echo home_url() ?>'">
          <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/LOGOTIPO-GS.png" />  
        </div>
        <a class="link" href="<?php echo home_url('/deportes-para-todes'); ?>">INICIO D.P.</a>
        <a class="link" href="<?php echo home_url('/copa-valores-universitarios'); ?>">COPA VALORES</a>
        <a class="link" href="<?php echo home_url('/uaqtivate'); ?>">UAQTÍVATE</a>
        <a class="link" href="<?php echo home_url('/indet') ?>">INDET</a>
      </div>
      <!-- fin menu responsivo -->      
      <div id="backdrop" class="backdrop"></div>
    </nav>
  </header>
  <script src=<?php echo get_template_directory_uri() . '/js/drawer.js' ?>></script>
</body>