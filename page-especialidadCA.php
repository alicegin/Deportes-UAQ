<?php 
/* Template Name: Especialidad CA */
get_template_part('template-parts/header');
?>

<?php
if (isset($_GET['valor'])) {
    $valor = htmlspecialchars($_GET['valor']);
    if(!($valor="Fisioterapia" || $valor= "Nutrición"|| $valor= "Psicología" || $valor= "Psicopedagogía")) {
        wp_safe_redirect( home_url( '/404' ) ); // Redirige a la URL de la página 404
        exit;
    }
}
else {
    wp_safe_redirect( home_url( '/404' ) );
    echo "No se recibió ningún valor. Regresa a la página de Ciencias Aplicadas";
    exit;
    
}
//Los valores del arreglo se manejan de la siguiente manera:
//[0]= Foto
//[1]= Nombre
//[2]= Área
//[3]= Teléfono
//[4]= Correo
//[5]= Semblanza

//valores de las 3 especialidades

$fisioterapia=[get_template_directory_uri() . '/assets/account_box.svg',
                "LFT. Jhoana Paola Rodríguez Gaytán",
                "Fisioterapia",
                "442 335 0813",
                "jhoana.rodriguez@uaq.mx",
                "Soy Licenciada en Fisioterapia graduada de la Universidad Autónoma de Querétaro. Además, obtuve una diplomatura en Integración Multidisciplinaria en la Fisioterapia 
Deportiva en la misma institución. Poseo certificaciones en Fisioterapia Dermatofuncional, Punción Seca, Dynamic Tape y he realizado múltiples cursos especializados en 
diversas áreas relacionadas con el deporte, incluyendo vendaje funcional, ejercicio durante el embarazo, parto y posparto. <br><br>
 Soy una apasionada del movimiento humano y su análisis estructural, así como de su promoción para alcanzar una mejor calidad de vida. Creo firmemente que el ejercicio 
es fundamental para lograr una vida digna, saludable y plena. Por ello, disfruto enormemente trabajar con deportistas, ayudándolos a potenciar sus capacidades para 
mejorar su rendimiento deportivo, corregir patrones de movimiento, prevenir lesiones y acompañarlos en sus procesos de rehabilitación hasta lograr una reintegración 
deportiva exitosa."
                ];
$nutricion=[get_template_directory_uri() . '/assets/account_box.svg',
            "L.N. Y E.D. Paola Alvarez Soria",
            "Nutrición",
            "442 748 6890",
            "nutriciondeporteuaq@gmail.com",
            "Desde los 11 años he estado involucrada en el deporte de alto rendimiento, una experiencia que sembró en mí numerosas preguntas sobre cómo mejorar mis hábitos 
diarios para alcanzar mejores resultados en la competencia.
 Mi formación como Licenciada en Nutrición en la Universidad Autónoma de Querétaro me permitió comprender lo beneficioso que es seguir un plan alimenticio adaptado 
a mis entrenamientos. Fue en ese momento cuando decidí especializarme como Nutrióloga Deportiva, comenzando por asesorar a mis compañeros de entrenamiento. 
Gracias a los excelentes resultados obtenidos por ellos, nació en mí el deseo de expandir mi conocimiento y convertirme en una aliada fundamental para los deportistas en 
la consecución de sus metas deportivas. Actualmente cuento con una especialidad en Nutrición Deportiva, además, de ser educadora en Diabetes."];




switch ($valor) {
    case "Fisioterapia":
        $arreglo=$fisioterapia;
        break;
    case "Nutrición":
        $arreglo=$nutricion;
        break;
    case "Psicología":
        $arreglo=$fisioterapia;
        break;
    case "Psicopedagogía":
        $arreglo=$nutricion;
        break;
}

?>
<main>
    <div class="contenido">
        <span style="display:flex;">
        <img style="width: 200px; height: auto; object-fit: cover;" src="<?php echo $arreglo[0] ?>">
        <section style="align-content: center; margin-left:20px">
            <h4><?php echo $arreglo[1] ?></h4>
            <h4>Responsable del área de <?php echo $arreglo[2] ?></h4>
            <h4>Teléfono: <?php echo $arreglo[3] ?></h4>
            <h4>Correo: <?php echo $arreglo[4] ?></h4>
        </section>
        </span>
        <h1>
            Semblanza
        </h1>
        <p>
        <?php echo $arreglo[5] ?>
        </p>

    </div>
</main>
