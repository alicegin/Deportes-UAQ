<?php
/* Template Name: Salón de la Fama */
get_template_part('template-parts/header');
?>

<main>
    <h1>Salón de la Fama</h1>
    <section class="mainMedallistas"></section>
</main>

<?php get_template_part('template-parts/footer'); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
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
                    console.log(res);
                    let dataMedallistas_2024 = res.data.medallistas_2024_a;
                    let dataMedallistas_2023 = res.data.medallistas_2023_unison;

                    llenarMedallistas(dataMedallistas_2024, mainWinners);
                    llenarMedallistas(dataMedallistas_2023, mainWinners);
                },
                error: function() {

                }
            });
        }

        function llenarMedallistas(data, container) {            
            let $infoContainer = $('<div class="infoMedallista"></div>');
            let $imgContainer = $('<div class="imgContainer"></div>');

            let $parteWinners = $(`
                <article class="parteMedallistas">
                    <div class="headerParteM">
                        <h1>Universidad Nacional 2024</h1>
                    </div>
                </article>
            `);
            
            let $carruselContainer = $(`
                <div class="carruselImgContainer">
                    <svg id="btnAnterior" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>                    
                    <svg id="btnSiguiente" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            `);
           
            $.each(data, function(index, medallista) {                
                let imgHTML = `
                    <img src="<?php echo get_template_directory_uri(); ?>${medallista.c_url_foto}" alt="Salón de la fama UAQ" class="medallistaImg">
                `;
                $imgContainer.append(imgHTML);
                
                let infoHtml = `
                    <div class="parteText">
                        <h1 class="nombreMedallista">${medallista.c_nombre} ${medallista.c_apellido_paterno} ${medallista.c_apellido_materno}</h1>
                        <h4 class="nombreDeporte">${medallista.c_nombre_deporte} ${medallista.c_nombre_categoria}</h4>
                        <p>${medallista.c_tipo_medalla}</p>
                    </div>
                `;
                $infoContainer.append(infoHtml);
            });
            
            $carruselContainer.append($imgContainer);           
           
            $parteWinners.append($carruselContainer);
            $parteWinners.append($infoContainer);
            
            $(container).append($parteWinners);
        }
    });
</script>