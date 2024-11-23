<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); wp_footer(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/instalaciones.css">
</head>
<body>
    <?php /* Template Name: Instalaciones */ get_template_part('template-parts/header'); ?>
    <main>
        <section class="cardContainer">
            <div class="card">
                <p class="precio">$750 MXN</p>
                <h1 class="nombre">Alberca El Pueblito</h1>
                <div class="hiddenImgContainer">
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alberca_1.jpg" alt="Alberca El Pueblito UAQ" />
                    </div>
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alberca_2.jpg" alt="Alberca El Pueblito UAQ" />
                    </div>
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alberca_4.jpg" alt="Alberca El Pueblito UAQ" />
                    </div>
                </div>
                <div class="hiddenContainer">
                    <div class="moreInfo">
                        <div class="parteMoreInfo">
                            <label>Descripción</label>
                            <p class="desc">Clases para niños y adultos. Se cuenta con distintos horarios</p>
                        </div>
                        <div class="parteMoreInfo">
                            <label>Características</label>
                            <p class="caracteristicas">10 carriles en curso largo y 20 en curso corto</p>
                        </div>
                        <div class="parteIcon infoDireccion">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p class="direccion">Carretera a Celaya Km. 3, Corregidora 5, Emiliano Zapata, 76912 El Pueblito, Qro.</p>
                        </div>
                    </div>
                    <div class="contactoContainer">       
                        <label>Contacto</label>                           
                        <div class="parteIcon">
                            <p class="correo">correo@gmail.com</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>                            
                        </div>
                        <div class="parteIcon">
                            <p class="tel">555-555-5555</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>                          
                        </div>
                    </div>
                </div>
                <div class="imgContainer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/alberca_3.jpg" alt="Instalaciones UAQ" />
                </div>
                <div class="infoContainer">                    
                    <div class="detallesContainer">
                        <div class="cardDetalle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                            <p>100</p>
                        </div>
                        <div class="cardDetalle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                            <p>50 m x 25 m x 2.7 m</p>
                        </div>
                        <div class="cardDetalle btnMas">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>                                                      
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <p class="precio">$750 MXN</p>
                <h1 class="nombre">Estadio Centro Universitario</h1>
                <div class="hiddenImgContainer">
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/estadio_cu_2.jpg" alt="Estadio Centro Universitario" />
                    </div>
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/estadio_cu_3.jpg" alt="Estadio Centro Universitario" />
                    </div>
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/estadio_cu_4.jpg" alt="Estadio Centro Universitario" />
                    </div>
                </div>
                <div class="hiddenContainer">
                    <div class="moreInfo">
                        <div class="parteMoreInfo">
                            <label>Descripción</label>
                            <p class="desc">Clases academicas de facultades, entrenamientos de la selección Universitaria de Soccer Varonil y Femenil y Juegos de Soccer de la Copa Valores</p>
                        </div>
                        <div class="parteMoreInfo">
                            <label>Características</label>
                            <p class="caracteristicas">Gradas, butacas, techo, y empastado</p>
                        </div>
                        <div class="parteIcon infoDireccion">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p class="direccion">Cerro de las Campanas, s/n, Col. Las Campanas, Qro.</p>
                        </div>
                    </div>
                    <div class="contactoContainer">       
                        <label>Contacto</label>                           
                        <div class="parteIcon">
                            <p class="correo">correo@gmail.com</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>                            
                        </div>
                        <div class="parteIcon">
                            <p class="tel">555-555-5555</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>                          
                        </div>
                    </div>
                </div>
                <div class="imgContainer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/estadio_cu_1.jpg" alt="Instalaciones UAQ" />
                </div>
                <div class="infoContainer">                    
                    <div class="detallesContainer">
                        <div class="cardDetalle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                            <p>1000</p>
                        </div>
                        <div class="cardDetalle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                            <p>107 m x 74 m</p>
                        </div>
                        <div class="cardDetalle btnMas">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>                                                      
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <p class="precio">$750 MXN</p>
                <h1 class="nombre">Gimnasio Exprepa Centro</h1>
                <div class="hiddenImgContainer">
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/prueba_1.webp" alt="Gimnasio Exprepa Centro" />
                    </div>
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/prueba_1.webp" alt="Gimnasio Exprepa Centro" />
                    </div>
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/prueba_1.webp" alt="Gimnasio Exprepa Centro" />
                    </div>
                </div>
                <div class="hiddenContainer">
                    <div class="moreInfo">
                        <div class="parteMoreInfo">
                            <label>Descripción</label>
                            <p class="desc">Clases academicas de facultades, entrenamientos de la selección Universitaria de Basquetbol Varonil y Femenil y Juegos de Liga ABE</p>
                        </div>
                        <div class="parteMoreInfo">
                            <label>Características</label>
                            <p class="caracteristicas">2 tableros, duela, y gradas de aluminio</p>
                        </div>
                        <div class="parteIcon infoDireccion">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p class="direccion">C. Ignacio Manuel Altamirano Sur 24, La Santa Cruz, 36, Centro, Qro.</p>
                        </div>
                    </div>
                    <div class="contactoContainer">       
                        <label>Contacto</label>                           
                        <div class="parteIcon">
                            <p class="correo">correo@gmail.com</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>                            
                        </div>
                        <div class="parteIcon">
                            <p class="tel">555-555-5555</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>                          
                        </div>
                    </div>
                </div>
                <div class="imgContainer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/prueba_1.webp" alt="Instalaciones UAQ" />
                </div>
                <div class="infoContainer">                    
                    <div class="detallesContainer">
                        <div class="cardDetalle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                            <p>400</p>
                        </div>
                        <div class="cardDetalle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                            <p>32 m x 22 m</p>
                        </div>
                        <div class="cardDetalle btnMas">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>                                                      
                        </div>
                    </div>
                </div>                           
            </div>
            <div class="card">
                <p class="precio">$750 MXN</p>
                <h1 class="nombre">Gimnasio Campus Aeropuerto</h1>
                <div class="hiddenImgContainer">
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/prueba_2.webp" alt="Gimnasio Campus Aeropuerto" />
                    </div>
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/prueba_2.webp" alt="Gimnasio Campus Aeropuerto" />
                    </div>
                    <div class="hiddenImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/prueba_2.webp" alt="Gimnasio Campus Aeropuerto" />
                    </div>
                </div>
                <div class="hiddenContainer">
                    <div class="moreInfo">
                        <div class="parteMoreInfo">
                            <label>Descripción</label>
                            <p class="desc">Clases academicas de facultades, entrenamientos de la selección Universitaria de Voleibol Varonil y Femenil</p>
                        </div>
                        <div class="parteMoreInfo">
                            <label>Características</label>
                            <p class="caracteristicas">2 tableros, duela, foro, y gradas</p>
                        </div>
                        <div class="parteIcon infoDireccion">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p class="direccion">Carretera a Chichimequillas s/n, Ejido Bolaños, 76140 Santiago de Querétaro, Qro.</p>
                        </div>
                    </div>
                    <div class="contactoContainer">       
                        <label>Contacto</label>                           
                        <div class="parteIcon">
                            <p class="correo">correo@gmail.com</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>                            
                        </div>
                        <div class="parteIcon">
                            <p class="tel">555-555-5555</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>                          
                        </div>
                    </div>
                </div>
                <div class="imgContainer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/prueba_2.webp" alt="Instalaciones UAQ" />
                </div>
                <div class="infoContainer">                    
                    <div class="detallesContainer">
                        <div class="cardDetalle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                            <p>700</p>
                        </div>
                        <div class="cardDetalle">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                            <p>40 m x 30 m</p>
                        </div>
                        <div class="cardDetalle btnMas">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>                                                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>    
    <?php get_template_part('template-parts/footer'); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.card', function() {
                showDetalles($(this));
            });

            function showDetalles($card) {                
                let $hiddenContainer = $card.closest('.card').find('.hiddenContainer');
                let $btnCerrar = $card.closest('.card').find('.cardDetalle.btnMas');

                $card.closest('.card').find('.hiddenImgContainer').css({'z-index': '10'});

                $('.card').removeClass('active-card');
                $card.addClass('active-card');

                $hiddenContainer.css({
                    'transition': 'opacity 0.3s ease',
                    'transition': '0.5s',
                    'transition-delay': '0.25s',
                    'opacity': '1',
                    'transform': 'translateY(0)',
                });

                $card.closest('.card').find('.hiddenImg').each(function(index) {                
                    let delay = 0.2 + (index * 0.1);
                    
                    $(this).css({
                        'transition': '0.45s',
                        'transition-delay': delay + 's'
                    });
                });

                $btnCerrar.empty();
                $btnCerrar.html(`
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 4.5-15 15m0 0h11.25m-11.25 0V8.25" />
                    </svg>
                `);
               
                // Manejar el clic en el botón cerrar
                $btnCerrar.off('click').on('click', function(e) {
                    e.stopPropagation(); // Evita que el clic se propague                    

                    // Animar opacidad al quitar la clase active-card
                    $card.addClass('inactive-card'); // Reduce opacidad a 0

                    // Escucha el evento de transición
                    $card.one('transitionend', function() {
                        $card.removeClass('active-card inactive-card'); // Elimina clases
                        $card.css('display', 'flex'); // Cambia a display: none al final
                        $btnCerrar.empty();
                    $btnCerrar.html(`
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg>
                    `);
                    });

                    $hiddenContainer.css({
                        'transition': '0s',
                        'transition': '0s',
                        'transition-delay': '0s',
                        'opacity': '0',
                        'transform': 'translateY(600px)',
                    });

                    $('.hiddenImg').css({
                        'transition': '0s',
                    });

                    $card.closest('.card').find('.hiddenImgContainer').css({'z-index': '-1'});
                });
            }
        });
    </script>
</body>
</html>