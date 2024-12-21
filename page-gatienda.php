<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php
        /* Template Name: gatienda */
        wp_head();
        wp_footer();
    ?>
</head>

<body>  
    <div class="overlay"></div>
    <div class="detallesProducto">
        <div class="btnCerrarModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
        <section class="galeriaContainer">
            <div class="activeImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="">
            </div>
            <div class="galeriaPart">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="">            
            </div>
        </section>
        <section class="contenidoDetalles">
            <p class="genero">Unisex</p>
            <h1 class="nombre">Gadeportiva</h1>
            <h5 class="precio">$599.00 MXN</h5>
            <p class="frase">Comodidad para cada entrenamiento</p>
            <h4 class="desc">Pantalón deportivo ajustado para entrenar</h4>
            <div class="colores"></div>
            <div class="tallas"></div>
            <div class="medidas"></div>
        </section>
    </div>
    <main>        
        <header class="headerGatienda" style="background-image: url(http://deportesuaq.mx/wp-content/uploads/2024/10/fondoHeader.jpeg);">
            <section class="mainCardsContainer"></section>
            <article class="headerText">
                <h1>GATIENDA</h1>
                <p>Ven a visitarnos y conoce nuestros productos universitarios</p>
                <button onclick="window.location='#cardsContainer'">Ver productos</button>
            </article>
        </header>
        <section id="cardsContainer">
            <section class="etiquetasContainer">
                <label class="etiqueta">Todos</label>
                <label class="etiqueta">Ropa deportiva</label>
                <label class="etiqueta">Accesorios</label>
            </section>
            <section class="cardsContent"></section>
        </section>
    </main>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            let productos = {};
            let $modal = $('.detallesProducto');
            let $overlay = $('.overlay');

            inicio();

            $('body').on('click', '.card', function() {
                let $card = $(this);
                
                let $tallasContainer = $('.tallas');
                let $medidasContainer = $('.medidas');
                let $coloresContainer = $('.colores');

                let id = $card.data('id');            
                let producto = productos.find(p => p.id == id);
               
                $modal.find('.genero').text(producto.genero);
                $modal.find('.nombre').text(producto.nombre);
                $modal.find('.precio').text('$' + producto.precio + '.00 MXN');
                $modal.find('.frase').text(producto.frase);
                $modal.find('.desc').text(producto.desc);

                llenarMedidas($tallasContainer, producto.tallas); 
                llenarMedidas($medidasContainer, producto.medidas); 
                llenarColores($coloresContainer, producto.colores); 
                
                $modal.css('transform', 'translate(-50%, -50%)');
                $overlay.css('display', 'flex');
            });

            $('body').on('click', '.overlay', function() {
                closeModal($modal, $overlay);
            });

            $('body').on('click', '.btnCerrarModal', function() {
                closeModal($modal, $overlay);
            })

            function inicio() {
                $.ajax({
                    url: '<?php echo get_template_directory_uri(); ?>/sc/loadGatienda.php',
                    type: 'POST',
                    data: false,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.success === 1 && typeof res.data == 'object') {
                            productos = res.data['productos'];

                            llenarRecientes(productos);
                            llenarTodos(productos);
                        }
                    },
                    error: function() {
                        console.log("Error al cargar los datos de Gatienda");
                    }
                });
            };

            function llenarRecientes(productos) {
                let $container = $('.mainCardsContainer');

                let recientes = productos.slice(-4);

                $.each(recientes, function(index, reciente) {
                    let $card = `
                        <article class="mainCard">
                            <div class="imgContainer">
                                <img src="<?php echo get_template_directory_uri(); ?>${reciente.img}" alt="GATIENDA">
                            </div>
                            <section class="infoCard">
                                <h1>${reciente.nombre}</h1>
                                <p>${reciente.desc}</p>
                            </section>
                        </article>
                    `;

                    $container.append($card)
                });
            }

            function llenarTodos(productos) {
                let $container = $('.cardsContent');

                let todos = productos.slice(0, -4);

                $.each(todos, function(index, producto) {
                    let $card = `                        
                        <article class="card" data-id="${producto.id}">                        
                            <div class="imgContainer">
                                <img src="<?php echo get_template_directory_uri(); ?>${producto.img}" alt="GATIENDA ${producto.nombre}">
                            </div>
                            <section class="infoCard">
                                <h1>${producto.nombre}</h1>
                                <p>${producto.desc}</p>
                            </section>
                        </article> 
                    `;

                    $container.append($card);
                });
            }

            function llenarMedidas($container, medidas) {
                let $card = ``;

                if (medidas != "null") {
                    $container.empty();

                    if ($container.is(':hidden')) {
                        $container.css('display', 'flex');
                    }

                    if (typeof(medidas) == 'object') {
                        $.each(medidas, function(index, medida) {
                            $card = `
                                <label class="talla">${medida}</label>
                            `;
                            $container.append($card);    
                        });
                    } else {
                        $card = `
                            <label class="medida">${medidas}</label>
                        `;
                        $container.append($card);
                    }                                                                          
                } else {
                    $container.css('display', 'none');
                }       
            }

            function llenarColores($container, colores) {
                let $color = ``; 

                if (colores != "null") {
                    $container.empty();

                    if ($container.is(':hidden')) {
                        $container.css('display', 'flex');
                    }

                    if (typeof(colores) == 'object') {
                        $.each(colores, function(index, color) {
                            $color = `
                                <div class="color">
                                    <div class="circulo" style="background-color:${color} !important;"></div>
                                </div>
                            `; 
                            $container.append($color);    
                        });
                    } else {
                        $color = `
                            <div class="color">
                                <div class="circulo"></div>
                            </div>
                        `;
                        $container.append($color);
                    }                                                                          
                } else {
                    $container.css('display', 'none');
                }       
            }

            function closeModal($modal, $overlay) {
                $modal.css('transform', 'translate(-200%, -50%)');
                $overlay.css('display', 'none');
            }
        });
    </script>
</body>

</html>