  <div class="container">
  <div class="row align-items-start">
    <div class="col">
      <h2 style="font-size: 40px;
    margin-top: 0;
    margin-bottom: 80px;
    margin-left: 20px;">Educacion Inicial</h2>
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



