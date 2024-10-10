<?php
/* Template Name: Salón de la Fama */
get_template_part('template-parts/header');
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />
</head>

<main>
    <section class="mainMedallistas"></section>
</main>

<?php get_template_part('template-parts/footer'); ?>

<script src="https://kit.fontawesome.com/4d77019a64.js" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        let currentIndexes = {};
        let mainWinners = $('.mainMedallistas');

        inicio();

        function inicio() {
            $.ajax({
                url: '<?php echo get_template_directory_uri(); ?>/sc/loadMedallistas.php',
                type: 'POST',
                data: false,
                processData: false,
                contentType: false,
                success: function(res) {
                    let dataMedallistas_2024 = res.data.medallistas_2024_a;
                    let dataMedallistas_2023 = res.data.medallistas_2023_unison;
                    let dataMedallistas_2022 = res.data.medallistas_2022_uacj;
                    let dataMedallistas_2021 = res.data.medallistas_2021_gto;
                    let dataMedallistas_2019 = res.data.medallistas_2019_uady;
                                        
                    llenarMedallistas(dataMedallistas_2024, mainWinners, '2024');
                    llenarMedallistas(dataMedallistas_2023, mainWinners, '2023');
                    llenarMedallistas(dataMedallistas_2022, mainWinners, '2022');
                    llenarMedallistas(dataMedallistas_2021, mainWinners, '2021');
                    llenarMedallistas(dataMedallistas_2019, mainWinners, '2019');
                },
                error: function() {
                    console.log("Error al cargar los medallistas");
                }
            });
        }

        function llenarMedallistas(data, container, year) {
            let $infoContainer = $('<div class="infoMedallista"></div>');
            let $imgContainer = $('<div class="imgContainer"></div>');

            // Establecer un índice inicial para este carrusel
            currentIndexes[year] = 0;

            let $parteWinners = $(`
                <article class="parteMedallistas">
                    <div class="headerParteM"><h1>Universidad Nacional ${year}</h1></div>
                </article>
            `);

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

            $.each(data, function(index, medallista) {
                let imgHTML = `<img src="<?php echo get_template_directory_uri(); ?>${medallista.c_url_foto}" alt="Medallista ${medallista.c_nombre} UAQ" class="medallistaImg ${index === 0 ? 'active' : 'inactive'}">`;
                $imgContainer.append(imgHTML);

                let medalClass;
                switch (medallista.c_tipo_medalla) {
                    case 'Oro':
                        medalClass = 'medal-gold';
                        break;
                    case 'Plata':
                        medalClass = 'medal-silver';
                        break;
                    case 'Bronce':
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
                            <h1 class="nombreMedallista ${medalClass}">${medallista.c_nombre} ${medallista.c_apellido_paterno} ${medallista.c_apellido_materno}</h1>
                            <h4 class="nombreDeporte">${medallista.c_nombre_deporte} ${medallista.c_nombre_categoria}</h4>
                        </div>                        
                    </div>`;
                $infoContainer.append(infoHtml);
            });

            $carruselContainer.append($imgContainer);
            $parteWinners.append($carruselContainer);
            $parteWinners.append($infoContainer);
            container.append($parteWinners);

            activarCarrusel(year, $imgContainer, $infoContainer);
        }

        function activarCarrusel(year, $imgs, $infos) {
            let totalImgs = $imgs.find('.medallistaImg').length;

            $(`#btnSiguiente-${year}`).on('click', function() {
                cambiarSlide(year, 1, $imgs, $infos);
            });

            $(`#btnAnterior-${year}`).on('click', function() {
                cambiarSlide(year, -1, $imgs, $infos);
            });

            $imgs.find('.medallistaImg').on('click', function() {
                // Obtener el índice de la imagen clickeada directamente desde $imgs
                let clickedIndex = $imgs.find('.medallistaImg').index(this);

                // Asegurarse de que el índice clickeado es diferente del actual
                if (clickedIndex !== currentIndexes[year]) {
                    // Siempre eliminar clases activas y añadir clases inactivas antes de actualizar
                    $imgs.find('.medallistaImg').eq(currentIndexes[year]).removeClass('active').addClass('inactive');
                    $infos.find('.parteText').eq(currentIndexes[year]).removeClass('active');

                    // Actualiza el currentIndex al nuevo índice de la imagen clickeada
                    currentIndexes[year] = clickedIndex;

                    // Activa la nueva imagen y el texto correspondiente
                    $imgs.find('.medallistaImg').eq(currentIndexes[year]).removeClass('inactive').addClass('active');
                    $infos.find('.parteText').eq(currentIndexes[year]).addClass('active');

                    // Ajustar el scroll horizontal para centrar la imagen activa
                    ajustarScroll($imgs, currentIndexes[year]);
                }
            });


            function cambiarSlide(year, direccion, $imgs, $infos) {
                $imgs.find('.medallistaImg').eq(currentIndexes[year]).removeClass('active').addClass('inactive');
                $infos.find('.parteText').eq(currentIndexes[year]).removeClass('active');

                currentIndexes[year] = (currentIndexes[year] + direccion + totalImgs) % totalImgs;

                $imgs.find('.medallistaImg').eq(currentIndexes[year]).removeClass('inactive').addClass('active');
                $infos.find('.parteText').eq(currentIndexes[year]).addClass('active');

                ajustarScroll($imgs, currentIndexes[year]);
            }

            function ajustarScroll($imgs, currentIndex) {
                let imgActiva = $imgs.find('.medallistaImg').eq(currentIndex);
                let containerWidth = $imgs.width();
                let imgPosition = imgActiva.position().left;
                let imgWidth = imgActiva.width();

                if (imgPosition !== undefined) {
                    let scrollPos = imgPosition - (containerWidth / 2) + (imgWidth / 2);

                    $imgs.animate({
                        scrollLeft: scrollPos
                    }, 200);
                }
            }
        }
    });
</script>