<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header style="margin-top: 100px;">
    <nav>
        <!-- Enlace a la página principal -->
        <a href="<?php echo home_url(); ?>">Inicio</a>

        <!-- Enlace a la página "Salón de la Fama" creada en WordPress -->
        <a href="<?php echo home_url('/salon-de-la-fama'); ?>">Salón de la Fama</a>

        <!-- Enlace a un archivo PHP dentro de la carpeta views -->
        <a href="<?php echo home_url('/conocenos') ?>">Conócenos</a>
    </nav>
</header>
</body>
