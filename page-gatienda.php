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
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                <div class="scrollPartGaleria" style="display: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                </div>
            </div>
            <div class="galeriaPart show">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
            </div>
        </section>
        <section class="contenidoDetalles">
            <p class="genero">Unisex</p>
            <h1 class="nombre">Gadeportiva</h1>
            <h5 class="precio">$599.00 MXN</h5>
            <div class="fraseContainer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                </svg>
                <p class="frase">Comodidad para cada entrenamiento</p>
            </div>
            <h1 class="tituloDetalles">Características del producto</h1>
            <h4 class="desc"></h4>
            <div class="colores"></div>
            <div class="tallas"></div>
            <div class="medidas"></div>
        </section>
        <section class="galeriaContainer parteAbajo">
            <div class="activeImg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                <div class="scrollPartGaleria" style="display: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                </div>
            </div>
            <div class="galeriaPart">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
            </div>
        </section>
    </div>
    <main>        
        <header class="headerGatienda" style="background-image: url(http://deportesuaq.mx/wp-content/uploads/2024/10/fondoHeader.jpeg);">
            <section class="mainCardsContainer"></section>
            <article class="headerText">
                <h1>GATIENDA</h1>
                <p>Descubre nuestros Productos Universitarios</p>
                <button onclick="window.location='#cardsContainer'">
                    Ver productos 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                    </svg>
                </button>
            </article>
        </header>
        <section id="cardsContainer">
            <section class="etiquetasContainer">
                <label id="todos" class="etiqueta">Todos</label>
                <label id="deportiva" class="etiqueta">Ropa deportiva</label>
                <label id="accesorios" class="etiqueta">Accesorios</label>
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
                llenarModal($(this));
            });

            $('body').on('click', '.overlay', function() {
                closeModal($modal, $overlay);
            });

            $('body').on('click', '.btnCerrarModal', function() {
                closeModal($modal, $overlay);
            });

            $('body').on('click', '.etiqueta', function() {
                categoria = $(this).attr('id');

                $('.etiqueta').css({
                    'background-color': 'transparent',
                    'color': '#000',
                });

                $(this).css({
                    'background-color': '#000030',
                    'color': '#fdfdfd',
                });

                $('.card').addClass('cardBorderRight');

                $('.cardsContent').css({
                    'border-left': '2px solid',
                });

                mostrarCategoria(categoria);
            });

            $('body').on('click', '.color' , function() {
                let productoNombre = $(this).closest('.contenidoDetalles').find('.nombre').text();
                let color = $(this).data('color');
                let galeriaIMG = $(this).closest('.detallesProducto').find('.galeriaPart.show img');

                cambiarGaleria(productoNombre, color, galeriaIMG);     
                
                $(this).closest('.contenidoDetalles').find('.color').css({'border-color': '#cfcfcf'});
                $(this).css({'border-color': '#00000070'});
            });

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
                                <img src="<?php echo get_template_directory_uri(); ?>${reciente.img}" alt="GATIENDA ${reciente.nombre}" loading="lazy">
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
                        <article class="card" data-id="${producto.id}" data-categoria="${producto.categoria}">                        
                            <div class="imgContainer">
                                <img src="<?php echo get_template_directory_uri(); ?>${producto.img}" alt="GATIENDA ${producto.nombre}" loading="lazy">
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

                    if (typeof(colores) != 'object') {
                        $color = `
                            <div class="color" data-color="${colores}">
                                <div class="circulo" style="background-color: #${colores}"></div>
                            </div>
                        `;
                        $container.append($color);
                    } else {                
                        $.each(colores, function(index, color) {
                            $color = `
                                <div class="color" data-color="${color}">
                                    <div class="circulo" style="background-color: #${color} !important;"></div>
                                </div>
                            `; 
                            $container.append($color);    
                        });
                    }                                                                          
                } else {
                    $container.css('display', 'none');
                }       
            }

            function llenarGaleria(productoNombre, colores, galeriaIMG) {
                if (typeof(colores) != 'object') {    
                    imgURL = '<?php echo get_template_directory_uri(); ?>' + '/img/gatienda/' + productoNombre + '_' + colores + '_1.jpg';
                    $('.activeImg img').attr('src', imgURL);

                    $.each(galeriaIMG, function(index, img) {
                        index = index + 2;

                        imgURL = '<?php echo get_template_directory_uri(); ?>' + '/img/gatienda/' + productoNombre + '_' + colores + '_' + index + '.jpg';
                        $(this).attr('src', imgURL);                    
                    });
                } else {
                    imgURL = '<?php echo get_template_directory_uri(); ?>' + '/img/gatienda/' + productoNombre + '_' + colores[0] + '_1.jpg';
                    $('.activeImg img').attr('src', imgURL);

                    $.each(galeriaIMG, function(index, img) {
                        index = index + 2;

                        imgURL = '<?php echo get_template_directory_uri(); ?>' + '/img/gatienda/' + productoNombre + '_' + colores[0] + '_' + index + '.jpg';
                        $(this).attr('src', imgURL);                    
                    });
                }
            }

            function llenarModal($card) {                
                let $tallasContainer = $('.tallas');
                let $medidasContainer = $('.medidas');
                let $coloresContainer = $('.colores');

                let imgURL = '';
                let id = $card.data('id');            
                let producto = productos.find(p => p.id == id);
                let galeriaIMG = $('.detallesProducto .galeriaContainer .galeriaPart img');                
               
                $modal.find('.genero').text(producto.genero);
                $modal.find('.nombre').text(producto.nombre);
                $modal.find('.precio').text('$' + producto.precio + '.00 MXN');
                $modal.find('.frase').text(producto.frase);
                $modal.find('.desc').text(producto.desc);

                llenarMedidas($tallasContainer, producto.tallas); 
                llenarMedidas($medidasContainer, producto.medidas); 
                llenarColores($coloresContainer, producto.colores);
                llenarGaleria(producto.nombre, producto.colores, galeriaIMG);
                                
                $modal.css('transform', 'translate(-50%, -50%)');
            
                if ($(window).width() <= 595) {
                    $overlay.css('display', 'none');
                } else {
                    $overlay.css('display', 'flex');
                }
            }

            function closeModal($modal, $overlay) {
                $modal.css('transform', 'translate(-200%, -50%)');
                $overlay.css('display', 'none');
            }

            function mostrarCategoria(categoria) {
                if (categoria == "todos") {
                    $('.card').show();
                } else {
                    $('.card').hide();
                    $(`.card[data-categoria='${categoria}']`).show();
                }
            }

            function cambiarGaleria(productoNombre, color, galeriaIMG) {
                imgURL = '<?php echo get_template_directory_uri(); ?>' + '/img/gatienda/' + productoNombre + '_' + color + '_1.jpg';
                $('.activeImg img').attr('src', imgURL);

                $.each(galeriaIMG, function(index, img) {
                    index = index + 2;

                    imgURL = '<?php echo get_template_directory_uri(); ?>' + '/img/gatienda/' + productoNombre + '_' + color + '_' + index + '.jpg';
                    $(this).attr('src', imgURL);                  
                });
            }
        });
    </script>
</body>

</html>