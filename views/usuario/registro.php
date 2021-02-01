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
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Login</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <!-- ====== LOGIN ====== -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <form action="<?=base_url?>Usuario/save" method="post" >

                <div role="form" class="php-email-form">
                  <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'Complete') {
                    echo "<p class='text-success' >Registro exitoso </p>";
                  }elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'Failed') {
                    echo "<p class='text-danger' >Fallo algo al registrar intente nuevamente </p>";
                  } ?>
                  <p></p>
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?=isset($_SESSION['register']) && $_SESSION['register'] == 'errorEmail' ? $_SESSION['datosRegistro']['nombre'] : ''?>"/>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="text" class="form-control" name="apellidos" id="apelldos"  placeholder="Apellidos" value="<?=isset($_SESSION['register']) && $_SESSION['register'] == 'errorEmail' ? $_SESSION['datosRegistro']['apellidos'] : ''?>"/>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?=isset($_SESSION['register']) && $_SESSION['register'] == 'errorEmail' ? $_SESSION['datosRegistro']['email'] : ''?>"/>
                      <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'errorEmail'){
                         echo "<p class='text-danger' >Error el correo ingresado ya tiene una cuenta </p>";
                        Utils::deleteSession('register');
                        Utils::deleteSession('datosRegistro');
                      }
                      ?>
                    </div>

                    <div class="col-md-6 form-group">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña"/>
                    </div>
                  </div>
                <br>
                <?php Utils::deleteSession('register'); ?>
                <div class="text-center"><button type="submit">Registrarce</button></div>
                </div>
              </form>

            </div>
            <!-- ========= Registros ========= --->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
