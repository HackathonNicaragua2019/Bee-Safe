<?php include_once "./assets/components/header.php"; ?>
  <section class="sectionGuia">
    <!--Secion banner de color-->
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-md-6  col-sm-12">
          <p id="primerTextoBannerGuia">La <bold id="BoldTextoBanner">violencia</bold>  tiene muchas facetas y manifestaciones y puede ser ejercida por una diversidad de actores, en diferentes lugares y en diferentes contextos, a una multiplicidad de victimas</p>
          <p class="infoPieTexto">Fuente Ana María Rivera<br>Técnicas del proyecto Soluciones ES/FUNDE</p>        
        </div>
      </div>
    </div>
  </section>
  <div class="container" id="tiposViolencia">
    <div class="row">
      <!--Seccion de los tipos de violencia -->
      <div class="col-xl-12 col-md-12 col-sm-12">
        <h1 class="tituloTiposViolencia">Tipos de violencia</h1>
        <p class="subtituloTiposViolencia">Identifica y previene los tipos de violencia</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lx-3 col-md-3 col-sm-12" id="violenciaCards" onclick="window.location='./guiaViolencia1.html'">
        <div class="card" style="width:@ 16rem;">
        <img src="./assets/imgViolencia/Violencia1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Violencia según el acto de quien lo comete</h5>
          <a href="./tpv1" class="btn btn-primary" id="botonInfoViolencia">Obtener más información</a>
        </div>
      </div>
      </div>
      <div class="col-lx-3 col-md-3 col-sm-12" id="violenciaCards" onclick="window.location='./guiaViolencia2.html'">
        <div class="card" style="width: 16rem;">
        <img src="./assets/imgViolencia/Violencia2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Violencia según el tipo de Daño Causado</h5>
          <a href="./tpv2" class="btn btn-primary" id="botonInfoViolencia">Obtener más información</a>
        </div>
      </div>
      </div>
      <div class="col-lx-3 col-md-3 col-sm-12" id="violenciaCards" onclick="window.location='./guiaViolencia3.html'">
        <div class="card" style="width: 16rem;">
        <img src="./assets/imgViolencia/Violencia3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Violencia según el tipo de victima</h5>
          <a href="./tpv3" class="btn btn-primary" id="botonInfoViolencia">Obtener más información</a>
        </div>
      </div>
      </div>
      <div class="col-lx-3 col-md-3 col-sm-12" id="violenciaCards" onclick="window.location='./guiaViolencia4.html'">
        <div class="card" style="width: 16rem;">
        <img src="./assets/imgViolencia/violencia4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" id="lastViolence">Violencia según el ambito donde ocurre</h5>
          <a href="./tpv4" class="btn btn-primary" id="botonInfoViolencia">Obtener más información</a>
        </div>
      </div>
      </div>
    </div>
  </div>
<?php include_once "./assets/components/footer.php"; ?>