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
    <!-- overlay: fondo oscuro para el modal de ver más detalles del producto -->
    <div class="overlay"></div>
    <!-- detallesProducto: contenedor del modal para ver más detalles del producto -->
    <div class="detallesProducto">
        <div class="btnCerrarModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
        <section class="galeriaContainer">
            <div class="activeImg">
                <div class="mainImgGaleria">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                </div>
                <div class="scrollPartGaleria">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gatienda/IMG_0002.jpg" alt="" loading="lazy">
                </div>
            </div>            
        </section>
        <section class="contenidoDetalles">
            <button id="btnDetalles" style="display: none;">
                Detalles 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                </svg>
            </button>
            <div class="infoPrincipal">
                <div class="parteInfoPrincipal">
                    <p class="genero">Unisex</p>
                    <h1 class="nombre">Gadeportiva</h1>
                    <h5 class="precio">$599.00 MXN</h5>
                </div>                
            </div>
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
    </div>
    <main> 
        <!-- headerGatienda: contenedor para el apartado de presentación -->
        <header class="headerGatienda" style="background-image: url(http://deportesuaq.mx/wp-content/uploads/2024/10/fondoHeader.jpeg);">
            <!-- mainCardsContainer: contenedor para agrupar las tarjetas de los productos recientes -->
            <section class="mainCardsContainer"></section>
            <article class="headerText">
                <div class="logoContainer">
                    <h1>GATIENDA</h1>
                    <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/GS-44.png" alt="Gatos Salvajes UAQ" loading="lazy"/>
                </div>
                <p>Descubre nuestros Productos Universitarios</p>
                <button onclick="window.location='#cardsContainer'">
                    Ver productos 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                    </svg>
                </button>
            </article>
        </header>
        <!-- cardsContainer: contenedor para el apartado de todos los productos -->
        <section id="cardsContainer">
            <section class="etiquetasContainer">
                <label id="todos" class="etiqueta">Todos</label>
                <label id="deportiva" class="etiqueta">Ropa deportiva</label>
                <label id="accesorios" class="etiqueta">Accesorios</label>
            </section>
            <!-- cardsContent: contenedor para agrupar todas las tarjetas de los distintos productos -->
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

            $('body').on('click', '.mainCard', function() {
                llenarModal($(this));
            })

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

            $('body').on('click', '#btnDetalles', function() {
                let $detallesProducto = $('.detallesProducto');

                $detallesProducto.animate(
                    { scrollTop: $detallesProducto[0].scrollHeight }, 600
                );
            });

            $('body').on('click', '.color' , function() {
                let productoNombre = limpiarNombre($(this).closest('.contenidoDetalles').find('.nombre').text());                
                let color = $(this).data('color');
                let galeriaIMG = $(this).closest('.detallesProducto').find('.galeriaContainer .activeImg .scrollPartGaleria img');
               
                cambiarGaleria(productoNombre, color, galeriaIMG);     
                
                $(this).closest('.contenidoDetalles').find('.color').css({'border-color': '#cfcfcf'});
                $(this).css({'border-color': '#00000070'});
            });

            /* Esta función obtiene la información de los productos a través de una petición POST. */
            function inicio() {
                $.ajax({
                    /* URL del archivo PHP para las funciones backend. */
                    url: '<?php echo get_template_directory_uri(); ?>/sc/loadGatienda.php',
                    type: 'POST',
                    data: false,
                    processData: false,
                    contentType: false,
                    /* Si la respuesta contiene información ejecuta funciones para generar el contenido. */
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

            /** 
             * Genera las tarjetas para los productos recientes.
             * 
             * Esta función toma los productos obtenidos de una petición POST, selecciona los últimos cuatro y crea las tarjetas correspondientes para mostrarlas en la interfaz.
             * 
             * @param {Array} productos - Información de los productos obtenida mediante una petición POST. Se espera un array de objetos con las propiedades 'id', 'img', 'nombre' y 'desc'.
             */                                
            function llenarRecientes(productos) {
                let $container = $('.mainCardsContainer');

                let recientes = productos.slice(-4);

                $.each(recientes, function(index, reciente) {
                    let $card = `
                        <article class="mainCard" data-id="${reciente.id}">
                            <div class="imgContainer">
                                <img src="${reciente.img}" alt="GATIENDA ${reciente.nombre}" loading="lazy" data-id="${reciente.id}">
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

            /**
             * Genera las tarjetas para todos los productos.
             * 
             * Esta función toma los productos obtenidos de una petición POST y crea las tarjetas correspondientes para mostrarlas en la interfaz.
             * 
             * @param {Array} productos - Información de los productos obtenida mediante una petición POST. Se espera un array de objetos con las propiedades 'id', 'nombre', 'img', 'categoria' y 'desc'.
             */
            function llenarTodos(productos) {
                let $container = $('.cardsContent');

                let todos = productos.slice(0, -4);

                $.each(todos, function(index, producto) {
                    let $card = `                        
                        <article class="card" data-id="${producto.id}" data-categoria="${producto.categoria}">                        
                            <div class="imgContainer">
                                <img src="${producto.img}" alt="GATIENDA ${producto.nombre}" loading="lazy">
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

            /**
             * Genera las tarjetas para la información sobre las medidas de los productos.
             * 
             * Esta función toma la información sobre las medidas de los productos obtenidos de una petición POST y crea las tarjetas correspondientes para mostrarlas en la interfaz.
             * 
             * @param {jQuery} $container - El elemento jQuery donde se actualizará el contenido.
             * @param {Array} medidas - Información de los productos obtenida mediante una petición POST. Se espera un array con la información de las medidas o un único valor.
             */
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

            /**
             * Genera los botones para la información sobre las colores de los productos.
             * 
             * Esta función toma la información sobre los colores de los productos obtenidos de una petición POST y crea los botones correspondientes para mostrarlos en la interfaz.
             * 
             * @param {jQuery} $container - El elemento jQuery donde se actualizará el contenido.
             * @param {Array} colores - Información de los productos obtenida mediante una petición POST. Se espera un array con la información de los colores o un único valor.
             */
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

            /**
             * Genera los elementos img para la información sobre la parte visual de los productos.
             * 
             * Esta función toma la información sobre las img de los productos obtenidos de una petición POST y crea los elementos img correspondientes para mostrarlos en la interfaz.
             * 
             * @param {string} productoNombre - El nombre del producto que requiere ver sus detalles.
             * @param {jQuery} galeriaIMG - El elemento jQuery donde se actualizará el contenido.
             * @param {Array} colores - Información de los productos obtenida mediante una petición POST. Se espera un array con la información de los colores o un único valor.
             */
            function llenarGaleria(productoNombre, colores, galeriaIMG) {
                if (typeof(colores) != 'object') {    
                    imgURL = 'http://deportesuaq.mx/wp-content/uploads/2024/12/' + productoNombre + '_' + colores + '_1-scaled.jpg';
                    $('.activeImg img').attr('src', imgURL);

                    $.each(galeriaIMG, function(index, img) {
                        index = index + 2;

                        imgURL = 'http://deportesuaq.mx/wp-content/uploads/2024/12/' + productoNombre + '_' + colores + '_' + index + '-scaled.jpg';
                        $(this).attr('src', imgURL);                    
                    });
                } else {
                    imgURL = 'http://deportesuaq.mx/wp-content/uploads/2024/12/' + productoNombre + '_' + colores[0] + '_1-scaled.jpg';
                    $('.activeImg img').attr('src', imgURL);

                    $.each(galeriaIMG, function(index, img) {
                        index = index + 2;

                        imgURL = 'http://deportesuaq.mx/wp-content/uploads/2024/12/' + productoNombre + '_' + colores[0] + '_' + index + '-scaled.jpg';
                        $(this).attr('src', imgURL);                    
                    });
                }
            }

            /**
             * Genera el contenido para el apartado de ver más información sobre el producto.
             * 
             * Esta función toma la información sobre el producto y crea los elementos correspondientes para mostrarlos en la interfaz.
             * 
             * @param {jQuery} $card - El elemento jQuery de donde se obtendrá la información que se requiere para ver más información del producto.
             */
            function llenarModal($card) {                
                let $tallasContainer = $('.tallas');
                let $medidasContainer = $('.medidas');
                let $coloresContainer = $('.colores');

                let imgURL = '';
                let nombreLimpio = '';
                let id = $card.data('id');            
                let producto = productos.find(p => p.id == id);
                let galeriaIMG = $('.galeriaContainer .activeImg .scrollPartGaleria img');                
               
                $modal.find('.genero').text(producto.genero);
                $modal.find('.nombre').text(producto.nombre);
                $modal.find('.precio').text('$' + producto.precio + '.00 MXN');
                $modal.find('.frase').text(producto.frase);
                $modal.find('.desc').text(producto.desc);

                llenarMedidas($tallasContainer, producto.tallas); 
                llenarMedidas($medidasContainer, producto.medidas); 
                llenarColores($coloresContainer, producto.colores);

                nombreLimpio = limpiarNombre(producto.nombre);
                llenarGaleria(nombreLimpio, producto.colores, galeriaIMG);
                                
                $modal.css('transform', 'translate(-50%, -50%)');
            
                if ($(window).width() <= 595) {
                    $overlay.css('display', 'none');
                } else {
                    $overlay.css('display', 'flex');
                }
            }

            /**
             * Hace la funcionalidad de ocultar el modal que aparece al ver más detalles sobre un producto.
             * 
             * Esta función toma los objetos JQuery y crea la funcionalidad para ocultarlos de la interfaz.
             * 
             * @param {jQuery} $modal - El elemento jQuery que muestra la información detallada de un producto.
             * @param {jQuery} $overlay - El elemento jQuery que muestra el fondo oscuro detrás del modal para información detallada de un producto.

             */
            function closeModal($modal, $overlay) {
                $modal.css('transform', 'translate(-200%, -50%)');
                $overlay.css('display', 'none');
            }

            /**
             * Hace la funcionalidad de ocultar los productos al seleccionar una categoría de productos.
             * 
             * Esta función toma el nombre de la categoría y crea la funcionalidad para ocultar los productos de la interfaz.
             * 
             * @param {string} categoria - El nombre de la categoría.
             */
            function mostrarCategoria(categoria) {
                if (categoria == "todos") {
                    $('.card').show();
                } else {
                    $('.card').hide();
                    $(`.card[data-categoria='${categoria}']`).show();
                }
            }

            /**
             * Hace la funcionalidad de cambiar las imágenes  del producto al seleccionar un color diferente del mismo producto.
             * 
             * Esta función toma el nombre del producto, el color seleccionado y el objeto JQuery de la galería para crear 
             * la funcionalidad y cambiar las imágenes del producto dependiendo del color seleccionado.
             * 
             * @param {string} productoNombre - El nombre del producto.
             * @param {string} color - El nombre del color seleccionado.
             * @param {JQuery} galeriaIMG - El objeto JQuery que muestra la galería del producto seleccionado.
             */
            function cambiarGaleria(productoNombre, color, galeriaIMG) {
                imgURL = 'http://deportesuaq.mx/wp-content/uploads/2024/12/' + productoNombre + '_' + color + '_1-scaled.jpg';
                $('.activeImg .mainImgGaleria img').attr('src', imgURL);

                $.each(galeriaIMG, function(index, img) {
                    index = index + 2;

                    imgURL = 'http://deportesuaq.mx/wp-content/uploads/2024/12/' + productoNombre + '_' + color + '_' + index + '-scaled.jpg';
                    $(this).attr('src', imgURL);                  
                });
            }

            /**
             * Esta función toma el nombre del producto, elimina los acentos y espacios en blanco,
             * y reemplaza los espacios con guiones para generar un formato adecuado para el nombre
             * de un archivo o elemento.
             * 
             * @param {string} nombre - El nombre original del producto.
             * @returns {string} El nombre del producto sin acentos y con guiones en lugar de espacios.
             */
            function limpiarNombre(nombre) {
                const sinAcentos = nombre.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
                const sinEspacios = sinAcentos.replace(/ /g, "-");
            
                return sinEspacios;
            }
        });
    </script>
</body>

</html>