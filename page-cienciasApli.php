<?php
/* Template Name: Ciencias Aplicadas */
get_template_part('template-parts/header');
?>
<style>
    @font-face {
    font-family: 'Plateia Bold';
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Plateia Bold.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }
  .contenido h1{
    font-family: 'Plateia Bold';
  }

</style>
<main>
    <div class="contenido">
        <h1>¿Qué es ciencias aplicadas al deporte?</h1>
        <p>
        Las Ciencias Aplicadas al Deporte (CAD) es un área especializada que cuenta con un equipo multidisciplinario compuesto por profesionales en fisioterapia, nutrición y psicología 
        deportiva. Este equipo se dedica a proporcionar una cobertura integral que busca satisfacer las necesidades deportivas de cada seleccionado universitario. Su objetivo principal es 
        garantizar el bienestar físico, psicológico y mental de los atletas, asegurando que reciban el apoyo necesario de manera gratuita. Con un enfoque holístico, el equipo de CAD trabaja 
        para optimizar el rendimiento deportivo, prevenir lesiones y promover hábitos de vida saludables, contribuyendo así al desarrollo integral de los estudiantes deportistas.
        </p>
        <div class="info">
            <h3>
                +INFO
            </h3>
        </div>
        <h1>¿Cómo acceder a ellas?</h1>
        <p>
        Las Ciencias Aplicadas ofrecen un beneficio gratuito para todas nuestras selecciones. Si estás interesado en acceder a alguno de estos servicios, deberás solicitar un "Pase de 
        Ciencias Aplicadas". Para obtenerlo, tu entrenador deberá proporcionar algunos datos personales, especificar el servicio requerido y explicar el motivo de la solicitud.
        Comunícate con el área correspondiente (fisioterapia, nutrición, psicología) para agendar una cita. Presenta tu pase cuando asistas con nuestros especialistas y recibirás la atención 
        que necesitas.
        </p>
    </div>
    <form>
    <div class="contenidoR">

    <div class="ginCard">
        <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/B2.jpeg">
        <div class="cardContenido" style="background: linear-gradient(to top, #203f74, #678fd8);">
        <h6>Nutrición deportiva</h6>
        <a href="<?php echo home_url('/ca'); ?>?valor=Nutrición" class="boton-AZUL" style="align-self: center;">INFORMACIÓN</a>
        </div>
    </div>
    
    <div class="ginCard">
        <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/B3.jpeg">
        <div class="cardContenido" style="background: linear-gradient(to top, #3d7e93, #7fc0d5);">
        <h6>Psicología deportiva</h6>
        <a href="<?php echo home_url('/ca'); ?>?valor=Psicología" class="boton-azul" style="align-self: center;">INFORMACIÓN</a>
        </div>
    </div>

    <div class="ginCard">
        <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/B1.jpeg">
        <div class="cardContenido" style="background: linear-gradient(to top, #b0afd2, #c7d1ee);">
        <h6>Fisioterapia Deportiva</h6>
        <a href="<?php echo home_url('/ca'); ?>?valor=Fisioterapia" class="boton-morado" style="align-self: center;">INFORMACIÓN</a>
        </div>
    </div>
    
    <div class="ginCard">
        <img src="http://deportesuaq.mx/wp-content/uploads/2024/08/B3.jpeg">
        <div class="cardContenido" style="background: linear-gradient(to top, #203f74, #678fd8);">
        <h6>Psicopedagogía deportiva</h6>
        <a href="<?php echo home_url('/ca'); ?>?valor=Psicopedagogía" class="boton-AZUL" style="align-self: center;">INFORMACIÓN</a>
        </div>
    </div>
    </form>
</main>
