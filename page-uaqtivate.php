<?php
/* Template Name: UAQtívate */
get_template_part('template-parts/headerDPT');
?>

<main>
    <div class="contenedorPrincipal">
        <div class="portada">
            <img src="http://deportesuaq.mx/wp-content/uploads/2024/11/imagen-stock-scaled.jpg">
            <div class="botones">
                <a id="video">Video Informativo</a>
                <a href="#UAQtivate">¿Qué es UAQtívate?</a>
            </div>
        </div>
        <div class="desarrollo" id="UAQtivate">
            <div class="texto">
                <div class="headerContenedor">
                    <h2>¿Qué es UAQtívate?</h2>
                </div>
                <p>
                    Es un programa de activación física dirigido a la comunidad universitaria <strong>de forma permanente</strong>. <br>
                    Se busca unificar los esfuerzos dedicados a erradicar el sedentarismo y fomentar el deporte recreativo por medio de sesiones de 15 a 20 minutos.<br> <br>
                    Es un espacio para fomentar la actividad física dirigido tanto a los alumnos, maestros y/o personal administrativo.
                </p>
                <div class="divisor"></div>
                <div clas="headerContenedor">
                    <h2>¿Cómo funciona?</h2>
                </div>
                <p>Existen 3 modalidades de UAQtívate:</p>
                <br>
                <div class="modalidades">
                    <div class="modalidad">
                        <a href="#eventos">
                            <h3>Presencial</h3>
                        </a>
                            <iframe  id="" src="https://lottie.host/embed/faf32035-0d65-4130-ab67-33b7cabe65c9/JaCoPNI2dT.lottie"></iframe>
                        <p>Campus donde puede tomar lugar la sesión:</p>
                        <li>Campus Aeropuerto</li>
                        <li>Centro Universitario</li>
                    </div>
                    <div class="modalidad">
                        <a href="https://www.facebook.com/uaqdeportes">
                            <h3>En línea</h3>
                        </a>
                        <iframe src="https://lottie.host/embed/870f310d-9902-46b3-8dd0-6c7a8f5e33a6/uuBvb8dbWO.lottie"></iframe>
                        <p>Mediante redes sociales se irán subiendo videos para la comunidad.</p>
                    </div>
                    <div class="modalidad">
                        <a href="https://www.youtube.com/watch?v=FZZMHvvcGhs&list=PLZwYFmRC9CrG-XTXDjE2aLyTUNk8tfpjV">
                            <h3>En demanda</h3>
                        </a>
                        <iframe src="https://lottie.host/embed/08519f96-2c98-49b6-a0fa-e9eee6cfa5bd/tq1uFMekut.lottie"></iframe>
                        <p>Lista de videos de activación física en YouTube.</p>
                    </div>
                </div>
                <div class="divisor"></div>
                <div clas="headerContenedor" id="eventos">
                    <h2>Eventos pasados</h2>
                </div>
                    <div class="eventos">
                        <img src="http://deportesuaq.mx/wp-content/uploads/2024/11/Infouaqtivate.jpg">
                        <img src="http://deportesuaq.mx/wp-content/uploads/2024/11/465740916_873822894854085_8977676216218552027_n.jpg">
                        <img src="http://deportesuaq.mx/wp-content/uploads/2024/11/463970646_864662599103448_8987194232595754543_n.jpg">
                    </div>
                <div class="divisor"></div>
                <div clas="headerContenedor" id="eventos">
                    <h2>Videos</h2>
                </div>
                <p>Recuerda que los demás videos están en <a href="https://www.facebook.com/uaqdeportes">la página de Facebook</a></p>
                <p>O bien también puedes consultar la rutina en YouTube: <a href="https://www.youtube.com/watch?v=FZZMHvvcGhs&list=PLZwYFmRC9CrG-XTXDjE2aLyTUNk8tfpjV">Haz tu Rutina</a></p>
                <div class="videos">
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fuaqdeportes%2Fvideos%2F403585499432456%2F&show_text=false&width=560&t=0" width="90%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fuaqdeportes%2Fvideos%2F1677695079744635%2F&show_text=false&width=560&t=0" width="90%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>
                
            </div>
            
        </div>
        <div class="ventanaVideo">
            <div class="cerrarV">
                <img src="<?php echo get_template_directory_uri(). '/assets/close.svg'?>">
            </div>
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fuaq.mx%2Fvideos%2F1272814063878065%2F&show_text=false&width=560&t=0" width="70%"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
    </div>
    

</main>

<script>
    //Las acciones son para cambiar las posiciones. Al iniciar la página, la ventana del video 
    //queda por detrás del contenido principal y al dar clic al botón del video trae para adelante la ventana.
    //Se mandan a llamar el botón para cerrar, el contenedor del video, el botón de video y el cuerpo del html
    botonC = document.querySelector(".cerrarV");
    ventanaVideo=document.querySelector(".ventanaVideo");
    video=document.querySelector("#video");
    body=document.querySelector("body");

    //Se hacen cambio de posiciones, la ventana del video se pasa para atrás.
    botonC.addEventListener('click', function() {
        ventanaVideo.style.zIndex = -1;
        body.style.overflow = 'auto';
    })

    //Pasa para adelante la ventana del video
    video.addEventListener('click', function() {
        window.scrollTo({
        top: 0,
        behavior: 'smooth' 
    });
        ventanaVideo.style.zIndex=10;
        body.style.overflow = 'hidden';

    })

    //Como el video es un embeded de Facebook, se busca que el video tenga una relación 16:9
    function ajustarAlturaIframes() {
            var iframes = document.querySelectorAll("iframe");
            iframes.forEach(function(iframe) {
                iframe.style.height = (iframe.offsetWidth * 9) / 16 + "px"; // Relación 16:9
            });
        }
  window.addEventListener("resize", ajustarAlturaIframes);
  window.addEventListener("load", ajustarAlturaIframes);
</script>
