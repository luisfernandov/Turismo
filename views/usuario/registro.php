<main id="main">

  <!-- ======= Contact Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Registro|Login</h2>
        <ol>
          <li><a href="<?=base_url?>">Home</a></li>
          <li>Registro|Login</li>
        </ol>
      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Contact Section ======= -->
  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Registro</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <form action="<?=base_url?>Usuario/login" method="post">
                <div role="form" class="php-email-form">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" />
                    </div>
                  </div>
                  <br>
                  <div class="text-center"><button type="submit">Iniciar sesión</button></div>
                </div>
              </form>
            </div>
            <!-- ========= Registros ========= --->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <form action="<?=base_url?>Usuario/save" method="post" >
                <div role="form" class="php-email-form">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre"/>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="text" class="form-control" name="apellidos" id="apelldos" placeholder="Apellidos"/>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email"/>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña"/>
                    </div>
                  </div>
                <br>
                <div class="text-center"><button type="submit">Registrarce</button></div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
