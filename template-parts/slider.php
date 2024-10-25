<?php
function generarCarrusel($imagenes) {
    $html = '
                <div class="contenedorAnimacion">
                <div class="contenedorCarrusel">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">';

    foreach ($imagenes as $index => $imagen) {
        $activeClass = $index === 0 ? ' active' : '';
        $html .= '<div class="carousel-item' . $activeClass . '">
                      <img src="' . $imagen . '" class="d-block w-100" alt="...">
                  </div>';
    }

    $html .= '        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                </div>
            ';

    return $html;
}
?>
