<!DOCTYPE html>
<html lang="en">

  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>I.E.P. San Agustín de Hipona</title>
    <link rel="icon" href="img/logo.png">

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



    <script src="https://kit.fontawesome.com/fd7be7c1fb.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom styles for windows emergent -->
    <link href="css/bootstrap.css" rel="stylesheet">
   <link href="css/slider.css" rel="stylesheet">
    <!-- PAQUETE DE ESTILOS DE SLIDER -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body id="page-top">


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#Inicio">
          <img src="img/logo-membrete.png" width="230" height="60"/></a>
        <button class="navbar-toggler navbar-toggler-rigth" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav  ml-auto">

            <li class="nav-item">
              <a style="color: #642529;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="index.php"><i class="fas fa-home"></i> <strong>Inicio</strong></a>
              <li class="nav-item">

            <li class="nav-item">
              <a style="color: #642529;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="#portfolio"><i class="fas fa-list-alt"></i> <strong>Servicios</strong></a>
            </li>

            <li class="nav-item">
              <a style="color: #642529;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="#sedes"><i class="fas fa-map-marked-alt"></i> <strong>Infraestructura</strong></a>
              <li class="nav-item">
              <a style="color: #642529;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="cita.html"><i class="fas fa-address-card"></i> <strong>Citas/Consultas</strong></a>
            </li>
            <li class="nav-item">
              <a style="color: #642529;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="software/view/index.php"><i class="fas  fa-folder"></i> <strong>Documentos</strong></a>
            </li>
            <li class="nav-item">
              <a style="color: #642529;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="#contact"><i class="fas fa-graduation-cap"></i> <strong>Cubibol</strong></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

  <section>
  <div class="container">
  <div class="row align-items-start">
    <div class="col">
      <h2>Educacion Inicial</h2>
     <div class="text-justify">
     <p>A partir del proceso de individuación iniciado en los primeros años de vida, los niños y las niñas de estas edades HAN LOGRADO DIFERENCIARSE DE LOS DEMÁS, Y EMPIEZAN UN PROCESO DE AFIRMACIÓN DE SU IDENTIDAD, DESDE EL CONOCIMIENTO DE SUS CARACTERÍSTICAS PERSONALES Y LA VALORACIÓN DE SÍ MISMOS.<br></p>
     <p>En este proceso, continúan desarrollando su autonomía, aprenden a reconocer y expresar con mayor seguridad sus emociones, y a regularlas progresivamente con el acompañamiento del docente. A medida que fortalecen estos aspectos desarrollan sus habilidades sociales, aprenden a convivir con los demás y a cuidar los espacios y recursos comunes que utilizan.<br></p>
     <p>De igual manera, aprenden a respetar y a construir acuerdos y normas de convivencia. En el proceso de su desarrollo psicomotriz, los niños y las niñas viven su cuerpo a través de la libre exploración y experimentación de sus movimientos, posturas, desplazamientos y juegos, en interacción permanente con su entorno y ambiente.<br></p>
     <ul class="list-unstyled">
      <li>En “San Agustín» encontrarás:
    <ul>
      <li>Aulas cómodas y espaciosas</li>
      <li>Juegos recreativos</li>
      <li>Profesores titulados y especialistas en el nivel</li>
      <li>Infraestructura amplia y personalizada</li>
      <li>Visitas guiadas e interactivas</li>
    </ul>
  </li>
</ul>
</div>
</div>
<div class="col">
  <div class="slider">    
 <div class="col">
      <?php
              $ids = array(1,2,3,4,5);
              $alt = array(
                  "Slide 1",
                  "Slide 2",
                  "Slide 3",
                  "Slide 4",
                  "Slide 5"
              );
              $max = count($ids);
              for($s=0;$s<$max;$s++){ ?>
                  <input type="radio" id="<?= $ids[$s]; ?>" name="image-slide" hidden />
          <?php } ?>
    <div class="slideshow">
              <?php for($s=0;$s<$max;$s++){ ?>
              <div class="item-slide">
                  <img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
              </div>
              <?php } ?>
          </div>
     <div class="pagination">
              <?php for($s=0;$s<$max;$s++){ ?>
              <label class="pag-item" for="<?= $ids[$s]; ?>">
                  <img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
              </label>
              <?php } ?>
          </div>
    </div>
    
  </div>

</div>
</div>
</div>
<div class="container text-center">
  <div class="team-member">
    <img class="mx-auto" style="width: 100px; height: auto;" class="img-fluid" src="img-sa/graduate-cap.png" alt="">
  </div>
</div>
</section>

<section id="informacion" style="margin-top: -330px;">
  <div class="container">
  <div class="row justify-content-start">
    <div class="col-md-4">
      <div class="team-member">
      <img class="mx-auto" style="width: 200px; height: auto;" src="img/universidad.png" alt="">
      <h4 style="color: #A66E24;">Infraestructura</h4>
</div>
</div>
    <div class="col-md-8 clearfix">
    <img class="mx-auto col-md-8 float-md-end mb-3 ms-md-3" style="width: 500px; height: auto;" src="img/inicial.jpg" alt="">  
    <p>
    A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
  </p>

  <p>
    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
  </p>

  <p>
    And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
  </p>
    </div>
</div>
</div>
</section>

<section>
  <div class="container">
<div class="row justify-content-start">
<div class="col-md-8 clearfix">
    <img class="mx-auto col-md-8 float-md-start mb-3 ms-md-3" style="width: 500px; height: auto;" src="img/inicial.jpg" alt="">
    <p>
    A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
  </p>

  <p>
    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
  </p>

  <p>
    And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
  </p>
    </div>
<div class="col-sm-4">
      <div class="team-member">
      <img class="mx-auto" style="width: 200px; height: auto;" src="img/que-habla.png" alt="">
      <h4 style="color: #A66E24;">Socializacion</h4>
      
    </div>
    </div>
    </div>
 </div>
</section>

<section>
  <div class="container">
<div class="row justify-content-end">
 <div class="col-sm-4">
      <div class="team-member">
      <img class="mx-auto" style="width: 200px; height: auto;" src="img/mochila.png" alt="">
      <h4 style="color: #A66E24;">Utiles Escolares</h4>
    </div>
    </div>
  <div class="col-md-8 clearfix">
    <img class="mx-auto col-md-8 float-md-end mb-3 ms-md-3" style="width: 500px; height: auto;" src="img/inicial.jpg" alt="">  
    <p>
    A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
  </p>

  <p>
    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
  </p>

  <p>
    And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
  </p>
    </div>
    </div>
</div>
</section>

<footer>
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright © Centro Radiológico Digital 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=51916602775">
                  <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Política de Privacidad</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Términos y Condiciones</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>




</html>
