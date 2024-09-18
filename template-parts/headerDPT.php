<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php
        wp_head();
        wp_footer();
    ?>
</head>

<body <?php body_class(); ?>>
    <div class="titulo">
        <a href="<?php echo home_url() ?>">
            <img src="http://deportesuaq.mx/wp-content/uploads/2024/07/Asset-6@300x.png" class="logo">
        </a>
        <h1> <?php
                if (isset($_GET['valor'])) {
                    $valor = $_GET['valor'];
                    echo titulo_personalizado($valor);
                } else {
                    the_title();
                }

                ?></h1>
        <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/A2.png" class="logo">
    </div>
    <header>
        <nav>
            <div class="navbar-content">
                <button onclick=showSidebar() class="navbar-togglerS" aria-label="Toggle navigation">
                    <span style="font-size: 25px">
                        &#9776; <!-- Símbolo de hamburguesa -->
                    </span>

                </button>
                <div class="navbar-menu hideMenu">
                    <a href="<?php echo home_url('/deportes-para-todos'); ?>">Inicio</a>
                    <a href="<?php echo home_url('/conocenos'); ?>">Copa Valores</a>
                    <a href="<?php echo home_url('/condde'); ?>">UAQtívate</a>
                    <a href="<?php echo home_url('/ciencias-aplicadas') ?>">INDET</a>
                    <a href="<?php echo home_url('/gatienda'); ?>">Gatienda</a>
                </div>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-menu">
                    <a href="<?php echo home_url('/deportes-para-todos'); ?>">Inicio</a>
                    <a href="<?php echo home_url('/conocenos'); ?>">Copa Valores</a>
                    <a href="<?php echo home_url('/UAQtívate'); ?>">UAQtívate</a>
                    <a href="<?php echo home_url('/ciencias-aplicadas') ?>">INDET</a>
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
<?php
function titulo($texto) {
    return $texto;
}
?>