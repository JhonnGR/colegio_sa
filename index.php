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

    <!-- PAQUETE DE ESTILOS DE SLIDER -->
    <link href="css/slider.css" rel="stylesheet" type="text/css" />



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
              <a style="color: #A66E24;font-family: 'Work Sans', sans-serif;font-size: 15px;
              .hover{ color: black;}" class="nav-link js-scroll-trigger" href="#sedes"><i class="fas fa-home"></i> <strong>Inicio</strong></a>
              <li class="nav-item">

            <li class="nav-item">
              <a style="color: #A66E24;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="#portfolio"><i class="fas fa-list-alt"></i> <strong>Servicios</strong></a>
            </li>

            <li class="nav-item">
              <a style="color: #A66E24;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="#sedes"><i class="fas fa-map-marked-alt"></i> <strong>Infraestructura</strong></a>
              <li class="nav-item">
              <a style="color: #A66E24;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="cita.html"><i class="fas fa-address-card"></i> <strong>Citas/Consultas</strong></a>
            </li>
            <li class="nav-item">
              <a style="color: #A66E24;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="software/view/index.php"><i class="fas  fa-folder"></i> <strong>Documentos</strong></a>
            </li>
            <li class="nav-item">
              <a style="color: #A66E24;font-family: 'Work Sans', sans-serif;font-size: 15px;
              " class="nav-link js-scroll-trigger" href="https://sanagustinsjl.cubicol.pe/principal/login"><i class="fas fa-graduation-cap"></i> <strong>Cubibol</strong></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
<style>
body {margin:0;height:200px;}

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: left;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
    background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}
.whatsapp {
  background: #00e600;
  color: white;
}
.instagram {
  background: #e4405f;
  color: white;
}
</style>
<body>

    <!-- Header -->
    <header class="masthead" style="margin-top: 120px;">

      <div class="slider">
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
    </header>
    <!-- Descripción-->
      <section class="py-5" id="services">
      <div class="container">

          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">LA INSTITUCIÓN EDUCATIVA PRIVADA «SAN AGUSTÍN»</h2>

              <div>
                <h5 style="text-align: justify;">La Institución Educativa Privada “San Agustín”,
                  fue creado en el año de 1991, con la RD N° 0945 del 30-09-91,
                  con el lema “Forjando el presente y futuro con disciplina y trabajo”
                  gestionado ante la UGEL 05 ex USE 03 del distrito de San Juan de Lurigancho por el
                  Dr. Félix De La Cruz Moreno, siendo su  propósito el de brindar un servicio educativo
                  de calidad a un costo social tanto en los niveles de educación Inicial, Primaria y Secundaria  de menores. </h5>
              </div>

            </div>
          </div>

        </div>
      </section>

    <!-- vision y mision-->
      <section class="py-5" id="services">
      <div class="container">

        <div class="row">

          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto" style="width: 150px; height: auto;" src="img-sa/mision.png" alt="">
              <h4 style="color: #A66E24;">Misión Institucional</h4>
              <div class="col-lg-8 mx-auto text-center">
              <p class="large text-muted" style="text-align: justify;">“Somos una institución educativa de
                                          gestión privada, que brinda servicios
                                          educativos de calidad en los Niveles de
                                          Educación Inicial, Primaria y Secundaria
                                          de menores en el distrito de San Juan de
                                          Lurigancho, promoviendo un estilo
                                          formativo basado en un modelo
                                          pedagógico social crítico, de
                                          investigación, inclusiva, desarrollando
                                          una cultura ambiental, la práctica de
                                          valores, gestión de riesgos, de
                                          convivencia democrática en pro de una
                                          cultura de paz”.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto" style="width: 150px; height: auto;" src="img-sa/vision.png" alt="">
              <h4 style="color: #A66E24;">Visión Institucional</h4>
              <div class="col-lg-8 mx-auto text-center">
              <p class="large text-muted" style="text-align: justify;">“Ser reconocidos nacional e
                                          internacionalmente como una Entidad
                                          Educativa Líder en la formación científica
                                          y humanística, centrada en la formación
                                          de valores y el desarrollo de
                                          competencias que respondan a los altos
                                          estándares de calidad, mediante procesos
                                          pedagógicos que reconocen la
                                          individualidad y promueven la
                                          autonomía del estudiante, apoyados por
                                          una comunidad educativa comprometida
                                          con el mejoramiento institucional y el de
                                          su entorno”.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>




    <!-- Services -->
  <section class="py-5" id="services">
  <div class="container">

    <div class="row">
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto" style="width: 150px; height: auto;" src="img-sa/te.png" alt="">
          <h4 style="color: #A66E24;">Para resolver sus dudas e inquietudes</h4>
          <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">----- Teléfono : 387-5469 / WhatsApp : 946 192 081 ----- Email: info@sanagustinsjl.edu.pe Dirección: Av. El Bosque 430 Urb. Canto Rey, San Juan de Lurigancho</p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter1">
          Leer mas
          </button>

          <!-- Modal -->
          <div class="modal fade" id="ModalCenter1" tabindex="-1" role="dialog" aria-labelledby="ModalCenter1Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLong1Title" style="color: #642529;     padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x); font-weight: bold;">Para resolver sus dudas e inquietudes</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="img-sa/te.png" alt="">
                  <p>----- Teléfono : 387-5469 / WhatsApp : 946 192 081 ----- Email: info@sanagustinsjl.edu.pe Dirección: Av. El Bosque 430 Urb. Canto Rey, San Juan de LuriganchoS</p>
                </div>
                <div class="modal-footer">
                  <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=51916602775">
              <i class="fa fa-whatsapp"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
           </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto" style="width: 150px; height: auto;" src="img-sa/infra2.png" alt="">
          <h4 style="color: #A66E24;">Infraestructura</h4>
          <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Contamos con laboratorios y salas de computo implementados con tecnología de alta calidad, además de piscinas propias semi olímpica e infantil para clases de natación.</p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter2">
          Leer mas
          </button>

          <!-- Modal -->
          <div class="modal fade" id="ModalCenter2" tabindex="-1" role="dialog" aria-labelledby="ModalCenter2Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLong2Title" style="color: #A66E24;">Infraestructura</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="img-sa/infra2.png" alt="">
                <P>Contamos con laboratorios y salas de computo implementados con tecnología de alta calidad, además de piscinas propias semi olímpica e infantil para clases de natación.</P>

                </div>
                <div class="modal-footer">
                  <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=51916602775">
              <i class="fa fa-whatsapp"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
           </div>
          </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto" style="width: 150px; height: auto;" src="img-sa/gradu1.png" alt="">
          <h4 style="color: #A66E24;">Actividades Extracurriculares</h4>
          <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Serás parte de los campeonatos que realizamos entre distintas instituciones, además de diversos eventos y festividades en toda la etapa estudiantil.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter3">
          Leer mas
          </button>

          <!-- Modal -->
          <div class="modal fade" id="ModalCenter3" tabindex="-1" role="dialog" aria-labelledby="ModalCenter3Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLong3Title" style="color: #A66E24;">Actividades Extracurriculares</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                  <div class="modal-body">
                  <img src="img-sa/gradu1.png" alt="">
                 <p>Serás parte de los campeonatos que realizamos entre distintas instituciones, además de diversos eventos y festividades en toda la etapa estudiantil.</p>
                </div>
                <div class="modal-footer">
                  <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=51916602775">
              <i class="fa fa-whatsapp"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
           </div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>






    <!-- Team -->
    <style type="text/css">

  .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #8c8888;
    background-color: #fff;
border-radius: 15px 20px 0px 0px;
font-size: 20px;
  }
    a {
     color: #fff;
}
a:hover {
    color: grey;
}



</style>
<section id="sedes">
    <div  style="background: #59c2e0;margin: 0px 0px;padding: 80px 0px;">
      <div class="container">

          <h2 class="text-center">Nuestras Sedes</h2>
  <hr>
  <!-- Nav pills -->
  <ul class="nav nav-pills nav-justified" >
    <li class="nav-item">
      <a class="nav-link active "  data-toggle="pill" href="#miraflores">Miraflores</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="#molina">La Molina</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="#sjl">San Juan De Lurigancho</a>
    </li>
        <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="#olivos">Los Olivos</a>
    </li>
        <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="#sanisidro">San Isidro</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="miraflores" class="container tab-pane active" style="background: white;padding: 20px 20px;border-radius: 0px 50px 40px 25px; "><br>
      <div class="row">
        <div class="col-sm-4">
          <h4>Horario de Atención:</h4>
          <p class="large text-muted"><b>Lunes -Viernes:</b> 9:00 am a 20:00 pm <br>
          <b>Sabado:</b> 9:00 am a 19:00 pm <br>
          <b>Teléfono:</b> 01 245-1141 <br>
          <b>Referencia:</b> Edificio Neptuno <br>Al costado de Saga Falabella <br>
          <b>Correo:</b>miraflores@centroradiologico.com.pe</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1159.746863112695!2d-77.0300609069859!3d-12.118452555671675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8177b4ceef5%3A0x52b1dfa139f09d35!2sAv.+Jos%C3%A9+Pardo+138%2C+Cercado+de+Lima+15074!5e0!3m2!1ses!2spe!4v1538597918117" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-8">
          <iframe width="100%" height="515" src="https://www.youtube.com/embed/WH8QJntSMsk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <br>
          <div class="team-member">
           <ul class="list-inline social-buttons" btn-lg>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=51997890934">
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
      </div>

    </div>
    <div id="molina" class="container tab-pane fade" style="background: white;padding: 20px 20px;border-radius: 2px 50px 40px 25px; "><br>

       <div class="row">
        <div class="col-sm-4">
          <h4>Horario de Atención:</h4>
          <p class="large text-muted"><b>Lunes -Viernes:</b> 9:00 am a 20:00 pm <br>
          <b>Sabado:</b> 9:00 am a 19:00 pm <br>
          <b>Teléfono:</b> 01 443-4319 <br>
          <b>Referencia:</b> Centro Comercial La Fontana <br>Av. Javier Prado con Los Frutales <br>
          <b>Correo:</b> lamolina@centroradiologico.com.pe </p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5146563805265!2d-76.96628368507054!3d-12.07687844574987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6ff54e4e587%3A0x3c19f1e4c5f29f0!2sAv.+Javier+Prado+Este+5250%2C+La+Molina+15023!5e0!3m2!1ses!2spe!4v1538598848021" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-8">
          <iframe width="100%" height="515" src="https://www.youtube.com/embed/SrhvzpJjZ3A?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <br>
          <div class="team-member">
           <ul class="list-inline social-buttons" btn-lg>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=51958720825">
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <div id="sjl" class="container tab-pane fade" style="background: white;padding: 20px 20px;border-radius: 2px 0px 40px 25px; "><br>
        <div class="row">
        <div class="col-sm-4">
          <h4>Horario de Atención:</h4>
          <p class="large text-muted"><b>Lunes -Viernes:</b> 9:00 am a 20:00 pm <br>
          <b>Sabado:</b> 9:00 am a 19:00 pm <br>
          <b>Teléfono:</b> 01 651-0256 <br>
          <b>Referencia:</b> Frente al Casino Mambo <br>
          <b>Correo:</b> sjl@centroradiologico.com.pe </p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.255828419498!2d-77.00487568507113!3d-12.025900644787221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f0e45b414f%3A0x4f8e7f924ce8e9be!2sAv+Gran+Chim%C3%BA+681%2C+San+Juan+de+Lurigancho+15401!5e0!3m2!1ses!2spe!4v1538600054413" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-sm-8">
        <iframe width="100%" height="515" src="https://www.youtube.com/embed/uG4A7ctfHco?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <br>
          <div class="team-member">
           <ul class="list-inline social-buttons" btn-lg>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=51997891535">
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>

        <div id="olivos" class="container tab-pane fade" style="background: white;padding: 20px 20px;border-radius: 2px 0px 40px 25px; "><br>
        <div class="row">
        <div class="col-sm-4">
          <h4>Horario de Atención:</h4>
          <p class="large text-muted"><b>Lunes -Viernes:</b> 9:00 am a 20:00 pm <br>
          <b>Sabado:</b> 9:00 am a 19:00 pm <br>
          <b>Teléfono:</b> 01 682-3694 <br>
          <b>Referencia:</b> Altura Cdra.13 Antunez de Mayolo <br>
          <b>Correo:</b> losolivos@centroradiologico.com.pe </p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.70127291821!2d-77.08089224915751!3d-11.995160291460014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce5e2deb7715%3A0x43866187661bff7a!2sAv.%20Antunez%20de%20Mayolo%201290%2C%20Los%20Olivos%2015301!5e0!3m2!1ses!2spe!4v1579095901982!5m2!1ses!2spe" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>



        </div>

        <div class="col-sm-8">
<iframe width="100%" height="450" src="https://www.youtube.com/embed/u4py_s0iw5Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>          <br>
          <div class="team-member">
           <ul class="list-inline social-buttons" btn-lg>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=51983779616">
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>

    <div id="sanisidro" class="container tab-pane fade" style="background: white;padding: 20px 20px;border-radius: 2px 0px 40px 25px; "><br>
        <div class="row">
        <div class="col-sm-4">
          <h4>Horario de Atención:</h4>
          <p class="large text-muted"><b>Lunes -Viernes:</b> 9:00 am a 20:00 pm <br>
          <b>Sabado:</b> 9:00 am a 19:00 pm <br>
          <b>Teléfono:</b> 01 651-0256 <br>
          <b>Referencia:</b> Frente al Casino Mambo <br>
          <b>Correo:</b> sjl@centroradiologico.com.pe </p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.255175744918!2d-77.02852168536435!3d-12.0946754914354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c865c73fcfa7%3A0x9df46d4bc80df81a!2sof%2041%2C%20Av.%20Rivera%20Navarrete%20765%2C%20San%20Isidro%2015046!5e0!3m2!1ses!2spe!4v1636149736051!5m2!1ses!2spe" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="col-sm-8">
        <center>
          <div style="width: 80% !important " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" width="100%"  src="img/POP_UP_CRD_SAN_ISIDRO.png" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" width="100%"  src="img/DSCT_APERTURA.png" alt="">
              </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </center>
          <br>
          <div class="team-member">
           <ul class="list-inline social-buttons" btn-lg>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=51974302430">
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>

  </div>
      </div>

</div>
</section>
     <!-- CASOS-->
    <!-- Clients -->

       <!-- Contact -->
    <section class="py-6" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contáctenos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="fomr01" action="enviar.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Por favor, introduzca su nombre.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="correo" name="correo" type="text" placeholder="Correo *" required="required" data-validation-required-message="Por favor, introduzca su dirección de correo electrónico.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="celular" name="celular" type="text" placeholder="Teléfono *" required="required" data-validation-required-message="Por favor, introduzca su número de teléfono.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="comentario" name="comentario" placeholder="Tu Mensaje *" required="required" data-validation-required-message="Por favor ingrese un mensaje."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input id="enviar" class="btn btn-primary btn-xl text-uppercase" name="enviar" type="submit"></input>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Centro Radiológico Digital 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a target="_blank" href="https://www.facebook.com/centroradiologicodigital/">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=51916602775">
                  <i class="fa fa-whatsapp"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://www.instagram.com/centroradiologicodigital/">
                  <i class="fa fa-instagram"></i>
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

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">TOMOGRAFIA CONEBEAM</h2>
                  <img class="img-fluid d-block mx-auto" src="imagescrd/portafolio1.jpg" alt="">
                  <img class="img-fluid d-block mx-auto" src="imagescrd/portafolio01.jpg" alt="">
                  <ul class="list-inline">
                    <li>Localización/ Ubicación de diente impactado</li>
                    <li>Implantes</li>
                    <li>Evaluación de área patológica</li>
                    <li>ATM</li>
                    <li>Senos Paranasales, Senos Maxilares</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    CERRAR</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">RAYOS X DIGITAL</h2>
                  <img class="col-lg-8 d-block mx-auto" src="imagescrd/portafolio2.jpg" alt="" >
                  <img class="col-lg-8 d-block mx-auto" src="imagescrd/portafolio02.jpg" alt="">
                  <ul class="list-inline">
                    <li>Panorámica</li>
                    <li>Lateral</li>
                    <li>Frontal</li>
                    <li>Carpal</li>
                    <li>ATM</li>
                    <li>Senos Maxilares</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    CERRAR</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">RAYOS X PERIAPICAL</h2>
                  <img class="img-fluid d-block mx-auto" src="imagescrd/portafolio3.jpg" alt="">
                  <ul class="list-inline">
                    <li>Rayos X Periapicales</li>
                    <li>Intraorales</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    CERRAR</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">DOCUMENTACIÓN ORTODÓNTICA</h2>
                  <img class="img-fluid d-block mx-auto" src="imagescrd/portafolio4.jpg" alt="">
                    <li>Servicio de documentación Ortodóntica</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    CERRAR</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">SERVICIO DE FOTOGRAFÍA CLÍNICA</h2>
                  <img class="img-fluid d-block mx-auto" src="imagescrd/portafolio5.jpg" alt="">
                  <ul class="list-inline">
                    <li>Servicio de fotorgafía Clínica Dental, según los parametros indicados ideales para seguimientos de tratamientos, y demas.</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    CERRAR</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>







  </body>

</html>
