<?php
/* Template Name: Salón de la Fama */
get_template_part('template-parts/header');
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />
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
        <section class="mainMedallistas"></section>
        <div class="btnViejosContainer">
            <button id="btnViejos">Ver los medallistas más antiguos</button>
        </div>
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

            function inicio() {
                $.ajax({
                    url: '<?php echo get_template_directory_uri(); ?>/sc/pruebaMedallistas.php',
                    type: 'POST',
                    data: false,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.success === 1 && typeof res.data === 'object') {
                            let contador = 0;

                            $.each(res.data, function(key, edicion) {
                                let year = (key.match(/_(\d{4})_/) || [])[1];

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

            function llenarMedallistas(data, container, year) {
                let urlLogo = `<?php echo get_template_directory_uri(); ?>/img/un/un_${year}.png`;

                let $parteWinners = $(`<article class="parteMedallistas"></article>`); // Declarar aquí
                let $infoContainer = $('<div class="infoMedallista"></div>');
                let $imgContainer = $('<div class="imgContainer"></div>');

                // Establecer un índice inicial para este carrusel
                currentIndexes[year] = 0;

                // Verificar si la imagen existe
                $.ajax({
                    url: urlLogo,
                    type: 'HEAD',
                    success: function () {
                        // Si la imagen existe, agregar logo y título
                        $parteWinners.append(`
                            <div class="headerParteM">                        
                                <div class="logoUNContainer">
                                    <img src="${urlLogo}" alt="Universidad Nacional ${year}" />
                                </div>
                                <h1>Universidad Nacional ${year}</h1>
                            </div>
                        `);
                    },
                    error: function () {
                        // Si no existe, solo agregar el título
                        $parteWinners.append(`
                            <div class="headerParteM">                        
                                <h1>Universidad Nacional ${year}</h1>
                            </div>
                        `);
                    },
                    complete: function () {
                        // Continuar agregando el resto del contenido después de la comprobación
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

                        $.each(data, function (index, medallista) {
                            let imgHTML = `<img src="${safeValue(medallista.c_url_img)}" alt="${safeValue(medallista.c_nombre)} ${safeValue(medallista.c_apellido_paterno)} Medallista UAQ" class="medallistaImg ${index === 0 ? 'active' : 'inactive'}">`;
                            $imgContainer.append(imgHTML);

                            let medalClass;
                            switch (safeValue(medallista.c_medalla)) {
                                case 'ORO':
                                    medalClass = 'medal-gold';
                                    break;
                                case 'PLATA':
                                    medalClass = 'medal-silver';
                                    break;
                                case 'BRONCE':
                                    medalClass = 'medal-bronze';
                                    break;
                                default:
                                    medalClass = ''; // Clase vacía si no es ninguno de los anteriores
                                    break;
                            }

                            let infoHtml = `
                                <div class="parteText ${index === 0 ? 'active' : ''}">
                                    <i id="${medalClass}" class="fa-solid fa-medal"></i>
                                    <div class="parteInfoText">
                                        <h1 class="nombreMedallista ${medalClass}">${safeValue(medallista.c_nombre)} ${safeValue(medallista.c_apellido_paterno)} ${safeValue(medallista.c_apellido_materno)}</h1>
                                        <h4 class="nombreDeporte">${safeValue(medallista.c_deporte)} <span class="separador"> | </span> ${safeValue(medallista.c_deporte_categoria)}</h4>
                                    </div>                        
                                </div>`;
                            $infoContainer.append(infoHtml);
                        });

                        $carruselContainer.append($imgContainer);
                        $parteWinners.append($carruselContainer);
                        $parteWinners.append($infoContainer);
                        container.append($parteWinners);

                        // Activar el carrusel después de agregar todos los elementos
                        activarCarrusel(year, $imgContainer, $infoContainer, $carruselContainer);
                    }
                });
            }

            function llenarTablaMedallistas(data, year) {
                if (data && data.length > 0) {
                    let tableID = `medallistas${year}`;

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

                    // Consolas para depuración
                    console.log("Posición de imagen activa:", imgPosition);
                    console.log("Ancho de imagen activa:", imgWidth);
                    console.log("Ancho del contenedor:", containerWidth);
                    console.log("Posición de desplazamiento calculada:", scrollPos);
                }
            }

            function safeValue(value) {
                return (value === null || value === 'null' || value === undefined) ? '' : value;
            }

            function safeNA(value) {
                return (value === null || value === 'null' || value === undefined) ? 'N/A' : value;
            }
        });
    </script>
</body>