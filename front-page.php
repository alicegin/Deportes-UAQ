<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    wp_head();
    wp_footer();
    ?>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-around py-3 mb-4 border-bottom">
            <img src="assets/img/LOGOS/A1.png" class="logo">
            <h1> ESPECIALIZACIÓN DEPORTIVA</h1>
            <img src="assets/img/LOGOS/A2.png" class="logo">
        </header>
      </div>

      <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">CONÓCENOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONDE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CIENCIAS APLICADAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SELECCIONES UNIVERSITARIAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">DOCUMENTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACTO</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/1A.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/2A.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/3A.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/4A.jpg">
                </div>
            </div>
        </div>
    </div>
</body>
</html>