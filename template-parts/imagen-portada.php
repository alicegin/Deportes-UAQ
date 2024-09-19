<?php
$blocks=get_query_var('blocks');
$subtitulo= extract_block_content($blocks, 'core/paragraph');
$botones= extract_block_content($blocks,'core/button');






$imagen = get_query_var('imagen');
$posicionTitulo=get_query_var('posicionTitulo');
?>


<div class="contenedor-imagen-portada">
    <img src="<?php echo $imagen?>">
    <div class="overlay-contenedor">
        <?php
            if($blocks== null){
                ?>
                <div>
                    <h1><?php the_title()?></h1>
                </div>
                <?php
            }
            else{
        ?>



        <?php
        if ($posicionTitulo== 'izquierda') {
            ?>
            <div>
                <h1><?php the_title();?></h1>
                <?php 
                foreach ($subtitulo as $sub){
                    echo $sub;
                }
                ?>
            </div>
            <div>
                <span>
                    <?php 
                    foreach ($botones as $boton){
                        echo '<a href="#'.strip_tags($boton).'" class="boton">'.strip_tags($boton).'</a>';
                    }
                    ?>
                </span>
            </div>
            <?php
        }
        else{
            ?>
            <div>
                <span>
                    <?php 
                    foreach ($botones as $boton){
                        echo '<a href="#'.strip_tags($boton).'" class="boton">'.strip_tags($boton).'</a>';
                    }
                    ?>
                </span>
            </div>
            <div>
                <h1><?php the_title();?></h1>
                <?php 
                foreach ($subtitulo as $sub){
                    echo $sub;
                }
                ?>
            </div>
            <?php

        }
    }
        ?>
        
    </div>
</div>