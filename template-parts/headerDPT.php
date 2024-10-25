<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
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
          <p class="titulo-drawer">MENU</p>

        </button>
        <div class="navbar-menu hideMenu margenHeaderIz">
        <a href="<?php echo home_url()?>">
          <img class="logo" src=<?php echo get_template_directory_uri() . '/img/header/GS-44.png'?>>
        </a>
        </div>
        <div class="navbar-menu hideMenu menuDPT">
            <a class="link" href="<?php echo home_url('/deportes-para-todos'); ?>">Inicio</a>
            <a class="link" href="<?php echo home_url('/copa-valores-universitarios'); ?>">Copa Valores</a>
            <a class="link" href="<?php echo home_url('/uaqtivate'); ?>">UAQtívate</a>
            <a class="link" href="<?php echo home_url('/indet') ?>">INDET</a>
            <a class="link" href="<?php echo home_url('/gatienda'); ?>">Gatienda</a>
        </div>
        <div class="navbar-menu hideMenu redesSociales">
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
      </div>
      <div id="drawer" class="drawer">
        <button id="closeButton" class="close-btn">&#x2715;</button>
        <p class="titulo-drawer">MENU</p>
        <a href="<?php echo home_url('/deportes-para-todos'); ?>">Inicio</a>
            <a class="link" href="<?php echo home_url('/copa-valores-universitarios'); ?>">Copa Valores</a>
            <a class="link" href="<?php echo home_url('/uaqtivate'); ?>">UAQtívate</a>
            <a class="link" href="<?php echo home_url('/indet') ?>">INDET</a>
            <a class="link" href="<?php echo home_url('/gatienda'); ?>">Gatienda</a>
      </div>
      
      <div id="backdrop" class="backdrop"></div>
        </nav>
    </header>
    <script src=<?php echo get_template_directory_uri() . '/js/drawer.js'?>></script> 
</body>