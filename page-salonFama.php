<?php
/* Template Name: Salón de la Fama */
get_template_part('template-parts/header');
?>

<head>
    <!-- Estilos CSS para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />
    <!-- Estilos CSS para las tablas de DataTables -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.dataTables.min.css" crossorigin="anonymous" />
</head>

<body>
    <main>
        <div class="btnTop">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
            </svg>
        </div>
        <!-- mainMedallistas: contendor para agrugar todos los apartados de las diferentes competencias y años -->
        <section class="mainMedallistas"></section>
        <div class="btnViejosContainer">
            <button id="btnViejos">Ver los Medallistas Anteriores</button>
        </div>
        <!-- tablesMedallistas: contenedor para agrupar todas las tablas con la informació de las diferentes competencias y años -->
        <section class="tablesMedallistas" style="display: none;"></section>
    </main>

    <script src="https://kit.fontawesome.com/4d77019a64.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentIndexes = {};
            let mainWinners = $('.mainMedallistas');
            let tablesMedallistas = $('.tablesMedallistas');
            let $scrollButton = $('.btnTop');

            inicio();

            $('#btnViejos').on('click', function() {
                tablesMedallistas.show(200);
                $('.btnViejosContainer').css('padding-bottom', '0');
                $('.btnViejosContainer').css('padding-top', '100px');
            });

            $('#btnViejos').on('click', function() {            
                let $target = $('.parteTable').first();
            
                if ($target.length) {                
                    $('html, body').animate({
                        scrollTop: $target.offset().top
                    }, 500);
                }
            });

            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 300) {
                    $scrollButton.fadeIn();
                } else {
                    $scrollButton.fadeOut();
                }
            });

            $scrollButton.on('click', function() {
                $('html, body').animate({ scrollTop: 0 }, 200);
            });

            /**
             * Esta función obtiene la información del archivo de Excel y genera dinamicamentelos 
             * elementos para mostrar la información en la interfaz.
             */
            function inicio() {
                $.ajax({
                    /**
                     *  URL del archivo backend para obtener la información del archivo de Excel
                     */
                    url: '<?php echo get_template_directory_uri(); ?>/sc/loadMedallistas.php',
                    type: 'POST',
                    data: false,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.success === 1 && typeof res.data === 'object') {
                            /**
                             * contador se usa para mostrar los primeros cinco apartados de los medallistas por año,
                             * para mostrar y diferenciar los apartados recientes de los anteriores.
                             */
                            let contador = 0;

                            $.each(res.data, function(key, edicion) {
                                let year = (key.match(/_(\d{4})_/) || [])[1];

                                /**
                                 * Esta condicional se usa para generar el apartado de recientes hasta que contador sea menor a cuatro,
                                 * y cuando se llenen todos los recientes se genera el apartado de anteriores.
                                 */
                                if (contador <= 4) {
                                    llenarMedallistas(edicion, mainWinners, year);
                                    contador++;
                                } else {
                                    llenarTablaMedallistas(edicion, year);
                                }
                            });
                        } else {
                            console.log("Error al cargar los datos");
                        }
                    },
                    error: function() {
                        console.log("Error al cargar los medallistas");
                    }
                });
            }

            /** 
             * Genera los objetos JQuery para mostrar las tarjetas de los medalliestas por su competencia y año.
             * 
             * Esta función toma la información de los medallistas obtenidos de una petición POST, 
             * selecciona los index identificar las diferentes competencias y crea las tarjetas correspondientes para mostrarlas en la interfaz.
             * 
             * @param {Array} data - Información de las diferentes competencias y de los medallistas obtenida mediante una petición POST. Se espera un array de objetos con las siguientes propiedades: 
             * 'c_url_img c_nombre', 'c_apellido_paterno', 'c_medalla', 'c_apellido_materno', 'c_deporte', y 'c_deporte_categoria'.
             * @param {JQuery} container - Contenedor donde se actualizará el contenido.
             * @param {string} year - Información del año en el cual se realizó la competencia.
             */  
            function llenarMedallistas(data, container, year) {
                let urlLogo = `http://deportesuaq.mx/wp-content/uploads/2024/11/un_${year}.png`;

                // Crear el contenedor principal
                let $parteWinners = $(`<article class="parteMedallistas"></article>`);
                let $infoContainer = $('<div class="infoMedallista"></div>');
                let $imgContainer = $('<div class="imgContainer"></div>');

                // Establecer un índice inicial para este carrusel
                currentIndexes[year] = 0;

                // Generar el encabezado sin verificar la imagen
                let headerHTML = `
                    <div class="headerParteM">
                        <img class="logoUNContainer" src="${urlLogo}" alt="Universidad Nacional ${year}" onerror="this.style.display='none'" />
                        <h1>Universidad Nacional ${year}</h1>
                    </div>`;
                $parteWinners.append(headerHTML);

                // Crear el contenedor del carrusel
                let $carruselContainer = $(`
                    <div class="carruselImgContainer">
                        <button id="btnAnterior-${year}" class="btnCarrusel anterior">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                            </svg>
                        </button>
                        <button id="btnSiguiente-${year}" class="btnCarrusel siguiente">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
                            </svg>
                        </button>
                    </div>
                `);

                // Agregar medallistas al contenedor
                $.each(data, function(index, medallista) {
                    let imgHTML = `<img src="${safeValue(medallista.c_url_img)}" alt="${safeValue(medallista.c_nombre)} ${safeValue(medallista.c_apellido_paterno)} Medallista UAQ" class="medallistaImg ${index === 0 ? 'active' : 'inactive'}">`;
                    $imgContainer.append(imgHTML);

                    let medalClass;
                    let medalTxt;
                    switch (safeValue(medallista.c_medalla)) {
                        case 'ORO':
                            medalClass = 'medal-gold';
                            medalTxt = 'ORO';
                            break;
                        case 'PLATA':
                            medalClass = 'medal-silver';
                            medalTxt = 'PLATA';
                            break;
                        case 'BRONCE':
                            medalClass = 'medal-bronze';
                            medalTxt = 'BRONCE';
                            break;
                        default:
                            medalClass = ''; // Clase vacía si no es ninguno de los anteriores
                            break;
                    }

                    let infoHtml = `
                        <div class="parteText ${index === 0 ? 'active' : ''}">
                            <div class="partMedal">
                                <h1 class="txtMedal ${medalClass}">${medalTxt}</h1>
                                <i id="${medalClass}" class="fa-solid fa-medal"></i>
                            </div>
                            <div class="parteInfoText">
                                <h1 class="nombreMedallista ${medalClass}">${safeValue(medallista.c_nombre)} ${safeValue(medallista.c_apellido_paterno)} ${safeValue(medallista.c_apellido_materno)}</h1>
                                <h4 class="nombreDeporte">${safeValue(medallista.c_deporte)} <span class="separador"> | </span> ${safeValueCat(medallista.c_deporte_categoria)}</h4>
                            </div>                        
                        </div>`;
                    $infoContainer.append(infoHtml);
                });

                // Finalizar el contenido y agregar al DOM
                $carruselContainer.append($imgContainer);
                $parteWinners.append($carruselContainer);
                $parteWinners.append($infoContainer);
                container.append($parteWinners);

                // Activar el carrusel después de agregar todos los elementos
                activarCarrusel(year, $imgContainer, $infoContainer, $carruselContainer);
            }

            /** 
             * Genera los objetos JQuery para mostrar las tablas con la información de los medalliestas por su competencia y año.
             * 
             * Esta función toma la información de los medallistas obtenidos de una petición POST, 
             * selecciona los index identificar las diferentes competencias, crea las tablas y apartados correspondientes para mostrarlas en la interfaz.
             * 
             * @param {Array} data - Información de las diferentes competencias y de los medallistas obtenida mediante una petición POST. Se espera un array de objetos con las siguientes propiedades: 
             * 'c_url_img c_nombre', 'c_apellido_paterno', 'c_medalla', 'c_apellido_materno', 'c_deporte', y 'c_deporte_categoria'.
             * @param {string} year - Información del año en el cual se realizó la competencia.
             */  
            function llenarTablaMedallistas(data, year) {
                if (data && data.length > 0) {
                    let tableID = `medallistas${year}`;

                    /** 
                     * articleHTML: guarda la plantilla del apartado para mostrar la información de los medallistas 
                     * por las distintas competencias y diferenciarlas por su año.
                     */
                    let articleHTML = `
                        <article class="parteTable">
                            <div class="tableTitle">
                                <h1>Universidad Nacional ${year}</h1>
                            </div>
                            <div class="tableContainer">
                                <table id="${tableID}" class="display">
                                    <thead>
                                        <tr>                                        
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Deporte</th>
                                            <th>Categoría</th>
                                            <th>Medalla</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                    `;

                    tablesMedallistas.append(articleHTML);

                    /**
                     * tableBody: guarda y crea la tabla por competencia y año con la información de los medallistas.
                     */
                    let tableBody = '';
                    $.each(data, function(index, medallista) {
                        tableBody += `
                            <tr>                            
                                <td>${safeNA(medallista.c_nombre)}</td>
                                <td>${safeNA(medallista.c_apellido_paterno)}</td>
                                <td>${safeNA(medallista.c_apellido_materno)}</td>
                                <td>${safeNA(medallista.c_deporte)}</td>
                                <td>${safeNA(medallista.c_deporte_categoria)}</td>
                                <td>${safeNA(medallista.c_medalla)}</td>
                                <td><img src="${safeValue(medallista.c_url_img)}" alt="${safeValue(medallista.c_nombre)} ${safeValue(medallista.c_apellido_paterno)} Medallista UAQ"></td>
                            </tr>
                        `;
                    });

                    $(`#${tableID} tbody`).append(tableBody);
                    $(`#${tableID}`).DataTable();
                }
            }

            /** 
             * Genera la funcionalidad para activar los controles de los distintos carruseles de los apartados de cada una de las competencias.
             * 
             * Esta función toma los obtejos JQuery de los diferentes apartados para agregar la funcionalidad de los carruseles.
             * 
             * @param {string} year - Información del año en el cual se realizó la competencia.
             * @param {jQuery} $imgs - Objetos JQuery de todas la fotos de los medallistas donde se aplica el evento click.
             * @param {jQuery} $infos - Objetos JQuery de todos los apartados con la información de los medallistas donde se aplica el evento click.
             * @param {jQuery} $carruselImgContainer - Objeto JQuery donde se agrupar todas las fotos en un carrusel.
             */ 
            function activarCarrusel(year, $imgs, $infos, $carruselImgContainer) {
                let totalImgs = $imgs.find('.medallistaImg').length;

                // Escuchar eventos de click para los botones de navegación
                $(`#btnSiguiente-${year}`).on('click', function() {
                    cambiarSlide(year, 1, $imgs, $infos, $carruselImgContainer);
                });

                $(`#btnAnterior-${year}`).on('click', function() {
                    cambiarSlide(year, -1, $imgs, $infos, $carruselImgContainer);
                });

                // Evento de click en cada imagen
                $imgs.find('.medallistaImg').on('click', function() {
                    let clickedIndex = $imgs.find('.medallistaImg').index(this);

                    if (clickedIndex !== currentIndexes[year]) {
                        $imgs.find('.medallistaImg').eq(currentIndexes[year]).removeClass('active').addClass('inactive');
                        $infos.find('.parteText').eq(currentIndexes[year]).removeClass('active');

                        currentIndexes[year] = clickedIndex;

                        $imgs.find('.medallistaImg').eq(currentIndexes[year]).removeClass('inactive').addClass('active');
                        $infos.find('.parteText').eq(currentIndexes[year]).addClass('active');

                        ajustarScroll($imgs, currentIndexes[year], $carruselImgContainer);
                    }
                });

                /**
                 * Esta función genera la funcionalidad para ajustar el scroll de los carruseles cuando
                 * se aplica el evento click en los botones del carrusel.
                 * 
                 * @param {string} year - Información del año en el cual se realizó la competencia.
                 * @param {string} direccion - Ajusta la dirección del carrusel.
                 * @param {jQuery} $imgs - Objetos JQuery de todas la fotos de los medallistas donde se aplica el evento click.
                 * @param {jQuery} $infos - Objetos JQuery de todos los apartados con la información de los medallistas donde se aplica el evento click.
                 * @param {jQuery} $carruselImgContainer - Objeto JQuery donde se agrupar todas las fotos en un carrusel.
                 */ 
                function cambiarSlide(year, direccion, $imgs, $infos, $carruselImgContainer) {
                    $imgs.find('.medallistaImg').eq(currentIndexes[year]).removeClass('active').addClass('inactive');
                    $infos.find('.parteText').eq(currentIndexes[year]).removeClass('active');

                    currentIndexes[year] = (currentIndexes[year] + direccion + totalImgs) % totalImgs;

                    $imgs.find('.medallistaImg').eq(currentIndexes[year]).removeClass('inactive').addClass('active');
                    $infos.find('.parteText').eq(currentIndexes[year]).addClass('active');

                    ajustarScroll($imgs, currentIndexes[year], $carruselImgContainer);
                }

                function ajustarScroll($imgs, currentIndex, $carruselImgContainer) {
                    let imgActiva = $imgs.find('.medallistaImg').eq(currentIndex);
                    let containerWidth = $carruselImgContainer.width(); // Ancho del carrusel visible
                    let imgPosition = imgActiva.position().left; // Posición de la imagen activa en imgContainer

                    // Obtener el ancho de la imagen activa (300px) o inactiva (190px)
                    let imgWidth = imgActiva.hasClass('active') ? 300 : 190;

                    // Cálculo para centrar la imagen activa
                    let scrollPos = imgPosition - (containerWidth / 2) + (imgWidth / 2);

                    // Ajustar el scrollLeft de imgContainer para centrar la imagen activa
                    $imgs.animate({
                        scrollLeft: scrollPos
                    }, 300);
                }
            }

            /**
             * Esta función trata la informaciób de los medallistas. Si la variable no contiene información se coloca como nula.
             * 
             * @param {string} value - Información de los medallistas
             */
            function safeValue(value) {
                return (value === null || value === 'null' || value === undefined) ? '' : value;
            }

            /**
             * Esta función trata la informaciób de los medallistas. Si la variable no contiene información se coloca como Sin categoría.
             * 
             * @param {string} value - Información de los medallistas
             */
            function safeValueCat(value) {
                return (value === null || value === 'null' || value === undefined) ? 'Sin categoría' : value;
            }
            
            /**
             * Esta función trata la informaciób de los medallistas. Si la variable no contiene información se coloca como N/A.
             * 
             * @param {string} value - Información de los medallistas
             */
            function safeNA(value) {
                return (value === null || value === 'null' || value === undefined) ? 'N/A' : value;
            }
        });
    </script>
</body>