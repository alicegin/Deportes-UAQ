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
                <button onclick=showSidebar() class="navbar-togglerS" aria-label="Toggle navigation">
                    <span style="font-size: 25px">
                        &#9776; <!-- Símbolo de hamburguesa -->
                    </span>

                </button>
                <div class="navbar-menu hideMenu">
                    <a href="<?php echo home_url('/deportes-para-todos'); ?>">Inicio</a>
                    <a href="<?php echo home_url('/copa-valores-universitarios'); ?>">Copa Valores</a>
                    <a href="<?php echo home_url('/uaqtivate'); ?>">UAQtívate</a>
                    <a href="<?php echo home_url('/indet') ?>">INDET</a>
                    <a href="<?php echo home_url('/gatienda'); ?>">Gatienda</a>
                </div>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-menu">
                    <a href="<?php echo home_url('/deportes-para-todos'); ?>">Inicio</a>
                    <a href="<?php echo home_url('/copa-valores-universitarios'); ?>">Copa Valores</a>
                    <a href="<?php echo home_url('/uaqtivate'); ?>">UAQtívate</a>
                    <a href="<?php echo home_url('/indet') ?>">INDET</a>
                    <a href="<?php echo home_url('/gatienda'); ?>">Gatienda</a>
                </div>
                <button onclick=hideSidebar() class="navbar-togglerH" aria-label="Toggle navigation">
                    <span style="font-size: 70px">
                        &rsaquo; <!-- Símbolo de flecha -->
                    </span>
                </button>
            </div>
        </nav>
    </header>
    <script>
        function showSidebar() {
            const sidebar = document.querySelector('.sidebar-content')
            sidebar.style.display = 'flex'
        }

        function hideSidebar() {
            const sidebar = document.querySelector('.sidebar-content')
            sidebar.style.display = 'none'
        }
    </script>
</body>