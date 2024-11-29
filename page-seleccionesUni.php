<?php
    /* Template Name: Selecciones Universitarias */
    get_template_part('template-parts/header');
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
 
        var t_deportes=null;
        var t_horarios=null;
        var t_entrenadores=null;
        var t_ubicaciones=null;

        inicio();

        function inicio() {
            $.ajax({
                url: '<?php echo get_template_directory_uri(); ?>/sc/deportesED.php',
                type: 'GET',
                data: false,
                success: function(res) {
                    if (res.success === 1 && typeof res.data === 'object') {
                        console.log('Se conectó correctamente');
                        
                        localStorage.setItem("deportes", JSON.stringify(res.data.deportes));
                        localStorage.setItem("horarios", JSON.stringify(res.data.horarios));
                        localStorage.setItem("entrenadores", JSON.stringify(res.data.entrenadores));
                        localStorage.setItem("ubicaciones", JSON.stringify(res.data.ubicaciones));

                        // Disparamos un evento personalizado para notificar que los datos están listos
                        const event = new Event('datosCargados');
                        window.dispatchEvent(event);  // Dispara el evento globalmente
                    } else {
                        console.log("Error al cargar los datos");
                    }
                },
                error: function() {
                    console.log("Error al conectar");
                }
            });

        }
    });
</script>

<main>
    <div class="imagenPrincipal">
        <img class="imgPortada" src="http://deportesuaq.mx/wp-content/uploads/2024/10/D3.jpg">
        <article class="banners">
            <div> <img src="http://deportesuaq.mx/wp-content/uploads/2024/11/gs.png"></div>
            <a>Selecciones Universitarias</a>
            <div>ED</div>
        </article>
    </div>
    <div class="informacion">
        <h1>¿Qué son las selecciones universitarias?</h1>
        <div>
            <p> Las selecciones universitarias son grupos deportivos integrados por estudiantes 
            representan a la Universidad Autónoma de Querétaro en diversas competencias de alto 
            nivel. Estas competiciones incluyen tanto eventos nacionales organizados por el Consejo 
            Nacional del Deporte de la Educación (CONDDE) como internacionales bajo la Federación 
            Internacional de Deportes Universitarios (FISU).</p>
            <br>
            <p>
                Actualmente, la Universidad Autónoma de Querétaro cuenta con un total de 25 disciplinas 
                deportivas, que abarcan tanto deportes individuales como de conjunto. Estas disciplinas 
                son practicadas por más de 300 seleccionados, provenientes de las distintas facultades de 
                la universidad.
            </p>
            <br>
            <p>
            Los miembros de las selecciones universitarias representa una oportunidad invaluable para 
            los estudiantes de desarrollar sus habilidades deportivas, fomentar el trabajo en equipo y 
            cultivar valores como la disciplina, el esfuerzo y la dedicación. Además, estas experiencias 
            competitivas contribuyen significativamente a su formación integral, complementando su 
            educación académica con el crecimiento personal y profesional que el deporte puede 
            proporcionar.
            </p>
        </div>

        <div class="tipoSelecciones">
            <div class="scroll">
                <button id="individual">
                    <h1>SELECCIONES INDIVIDUALES</h1>
                </button>
                <button id="conjunto">
                    <h1>SELECCIONES CONJUNTO</h1>
                </button>
            </div>
            <div class="opciones">
                <article id="individualDot"></article>
                <article id="conjuntoDot"></article>
            </div>
        </div>

        <div class="carruselDeportes">
            
        </div>

        <div class="infoDeporte" id="infoDeporte">

        </div>
        
    </div>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/js/espDep/selecciones.js"></script>

