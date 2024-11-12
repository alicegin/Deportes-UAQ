<?php 
/* Template Name: Especialidad CA */
get_template_part('template-parts/header');
?>

<?php
if (isset($_GET['valor'])) {
    $valor = htmlspecialchars($_GET['valor']);
    $valores_permitidos = ["Fisioterapia", "Nutrición", "Psicología", "Psicopedagogía"];
    
    if (!in_array($valor, $valores_permitidos, true)) {
        echo'Ese valor no existe. Regresa a la página de Ciencias Aplicadas';
        exit;
    }
} else {
    echo'No se recibió ningún valor. Regresa a la página de Ciencias Aplicadas';
    exit;
}
//Los valores del arreglo se manejan de la siguiente manera:
//[0]= Foto
//[1]= Nombre
//[2]= Área
//[3]= Teléfono
//[4]= Correo
//[5]= Semblanza
//[6]= Color

//valores de las 3 especialidades

$fisioterapia=['http://deportesuaq.mx/wp-content/uploads/2024/10/FISIO.png',
                "LFT. Jhoana Paola Rodríguez Gaytán",
                "FISIOTERAPIA",
                "442 335 0813",
                "jhoana.rodriguez@uaq.mx",
                "Soy Licenciada en Fisioterapia graduada de la Universidad Autónoma de Querétaro. Además, obtuve una diplomatura en Integración Multidisciplinaria en la Fisioterapia 
Deportiva en la misma institución. Poseo certificaciones en Fisioterapia Dermatofuncional, Punción Seca, Dynamic Tape y he realizado múltiples cursos especializados en 
diversas áreas relacionadas con el deporte, incluyendo vendaje funcional, ejercicio durante el embarazo, parto y posparto. <br><br>
 Soy una apasionada del movimiento humano y su análisis estructural, así como de su promoción para alcanzar una mejor calidad de vida. Creo firmemente que el ejercicio 
es fundamental para lograr una vida digna, saludable y plena. Por ello, disfruto enormemente trabajar con deportistas, ayudándolos a potenciar sus capacidades para 
mejorar su rendimiento deportivo, corregir patrones de movimiento, prevenir lesiones y acompañarlos en sus procesos de rehabilitación hasta lograr una reintegración 
deportiva exitosa."," #b0afd2","#94a9e0"
                ];
$nutricion=['http://deportesuaq.mx/wp-content/uploads/2024/10/NUTRICION.png',
            "Ana Guadalupe Arguello Mejia",
            "NUTRICIÓN",
            "464 205 9554",
            "armejana@gmail.com",
            "Mi nombre es Ana Guadalupe Arguello Mejía, soy nutrióloga apasionada del deporte, egresada de la Universidad Autónoma de
             Querétaro, cuento con diplomados, cursos y actualizaciones relacionados al deporte y su fisiología, avalados por CONADE, 
             Universidad Anáhuac y el Instituto de Ciencias del Deporte de Gatorade.
             Soy instructora ISAK 2, avalada por la Sociedad Internacional para el avance de la cineantropometría; tengo 5 años de
             experiencia en el alto rendimiento, trabajando para el club Querétaro gallos blancos, soy docente en la Universidad ITECA
             y la Federación Mexicana de Futbol impartiendo materias como nutrición, fisiología, dopaje, biología. <br>
             Fui parte de selectivos de handball y basquetbol durante mis estudios en la UAQ, por lo cual, soy consiente de los problemas 
             que nos podemos enfrentar al estudiar y entrenar. Ser parte ahora del equipo de Especialización Deportiva de la UAQ, representa 
             para mi un gran reto con el cual, pretendo orientar a cada deportista, demostrarle que podemos comer todo lo que se nos antoje, 
             pero aprendiendo en que momento. Mi objetivo será aplicar estrategias alimenticias para promover la buena salud y la adaptación 
             a sus entrenamientos, buscando la recuperación rápida y el desempeño optimo en cada competencia.", "#203f74","#94a9e0"];
$psicologia=['http://deportesuaq.mx/wp-content/uploads/2024/10/PSICOLOGIA.png',
            "Juan González Jayme",
            "PSICOLOGÍA",
            "442 411 0004",
            "psicologiawolfsburg@gmail.com",
            "Psicólogo del deporte 
-Doctorando en Ciencias de la Educación y del deporte 
-Maestro en Gestión Deportiva 
-Maestro en Educación 
-Director Técnico Profesional  Licencia  PRO
FEMEXFUT 
-Licenciado en Psicología educativa
Experiencia :
-Miembro del Staff de entrenadores del VFL Wolfsburg  Docente en Maestría, ⁠Scouter  para equipos de Polonia , España y Alemania, ⁠Psicólogo selección Mexicana de Rugby, ⁠Psicólogo Selección mexicana Futbol 7 campeona mundial 2023 y campeona Copa América 2024, ⁠Socio Fundador InterCamps y Especialidades en Psicología, ⁠Docente ENDIT Y ENA, ⁠Psicólogo en Gallos Blancos de Querétaro Femenil y Varonil, ⁠Colaborador en Radar Sport 107.5 FM con la sección de psicología del deporte ,⁠Conferencista , Ponente , Facilitador en temas de psicología del deporte para diferentes disciplinas, Miembro de la Asociación Catalana de Psicología del Deporte.
","#3d7e93","#80c1d6"];
$psicopedagogia=['http://deportesuaq.mx/wp-content/uploads/2024/10/PSICOPEDAGOGIA.png',
            "Lic. Sofía Berrueta Molina ",
            "PSICOPEDAGOGÍA",
            "443 224 9414",
            " fisioberrueta@gmail.com",
            "Mi nombre es Sofia Berrueta soy licenciada en Pedagogía, egresada del Centro de Estudios Superiores de las Culturas. Así como actual pasante del área de fisioterapia en la Universidad del Valle de México. Lo cual me permitirá tener un enfoque integral entre la educación y la salud física de los atletas.
Cuento con diversos diplomados y cursos, entre ellos intervención en logopedia, estimulación multisensorial en pacientes autistas, ejercicios en la rehabilitación de lesiones deportivas y terapia manual articular. Cuento con conocimientos dentro del área clínica hospitalaria y privada.
De igual forma he impartido clases dentro de las carreras de educación física y pedagogía, así como conferencias dentro del área de pedagogía y fisioterapia.
Desde muy temprana edad me he encontrado inmersa en diversos deportes, actualmente compito a nivel nacional en rally automovilístico. Por lo cual comprendo la importancia de llevar una vida equilibrada en todos los ámbitos de la vida del atleta, permitiendo que pueda desarrollarse profesionalmente sin tener que decidir entre su carrera y su actividad deportiva.
Soy creyente de que logrando una sinergia adecuada se pueden lograr todas las metas propuestas sin tener que dejar de lado aquello que nos apasiona. Me entusiasma formar parte del equipo multidisciplinario que permita generar mejores resultados dentro de todos los ámbitos.
","#203f74","#94a9e0"];


switch ($valor) {
    case "Fisioterapia":
        $arreglo=$fisioterapia;
        break;
    case "Nutrición":
        $arreglo=$nutricion;
        break;
    case "Psicología":
        $arreglo=$psicologia;
        break;
    case "Psicopedagogía":
        $arreglo=$psicopedagogia;
        break;
}

?>
<style>
    @font-face {
    font-family: 'Plateia Bold';
    src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Plateia Bold.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }
  main h1{
    font-family: 'Plateia Bold';
  }
    main{
        width: auto;
        height: auto;
        background-color: <?php echo $arreglo[6]?>;
        position: relative;
        background-image: url("http://deportesuaq.mx/wp-content/uploads/2024/10/CAD.png");
    }
</style>
<main>
    <img src="http://deportesuaq.mx/wp-content/uploads/2024/10/Ciencias-Aplicadas-al-Deporte-18.png" class="caLogo">
    <div class="primeraParte">
        <article class="contenedor-area">
            <p class="area" style="background-color:<?php echo $arreglo[7]?>"><?php echo $arreglo[2]?></p>
        </article>
        <div class="contenedorFoto">
            <img class="fotoResponsable" src="<?php echo $arreglo[0]?>">
            <button class="btnfoto" onclick="location.href='#semblanza'" style="background-color:white;">Ver semblanza</button>
            </div>
        
        <article class="datosResponsable">
            <h1>
                <?php echo $arreglo[1]?>
            </h1>
            <h4>
                RESPONSABLE DEL ÁREA DE <?php echo $arreglo[2]?>
            </h4>
            <br>
            <p>
                TELÉFONO: <?php echo $arreglo[3]?>
                <br>
                CORREO: <?php echo $arreglo[4]?>
            </p>
        </article>
    </div>
    <div class="contenidoR" id="semblanza">
            <h3 class="info" style="background-color: <?php echo $arreglo[7]?>">
                +INFO
            </h3>
        </div>
    <div class="semblanza">
        <h1>
            SEMBLANZA
        </h1>
        <br>
        <p>
            <?php echo $arreglo[5]?>
        </p>
    </div>
</main>
