<?php require_once 'views/layout/hero.php'; ?>
<main id="main">

  <!-- ======= Services Section ======= -->
  <section class="services">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Puntualidad</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-cyan">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Responsabilidad</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-green">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">Buena atencion</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-blue">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">100% recomendada</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">


      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="<?=base_url?>assets/img/hiro/vid.jpg" class="img-fluid" alt="">
          <a href="https://youtu.be/flOY5SBmMQU" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Sucre</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Ubicacion geografica</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section class="features">
    <div class="container">
      <div class="section-title">
        <h2>Lugares más visitados</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <?php
        while ($lt = $lugarTuristico->fetch_object()) {
          if ($lt->estado == 1) {
      ?>
          <div class="row" data-aos="fade-up">
            <div class="col-md-5 <?=$lt->id % 2 == 0 ? '' : 'order-1 order-md-2' ?> ">

              <img src="<?=base_url?>uploads/images/lugaresTuristicos/<?=$lt->imagen?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4">
              <h2><?=$lt->nombre ?></h2>
              <hr>
              <p >
                <?=$lt->descripcion_corta ?>
              </p>
              <ul>
                <li>
                  <i class="icofont-check"><a href="<?=base_url?>LugaresTuristicos/vista&token=<?=$lt->token?>">Ver más</a></i>
                </li>
              </ul>
            </div>
      </div>
      <?php
          }
        }
      ?>

    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->
