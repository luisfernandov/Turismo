<main id="main">

  <!-- ======= Our Services Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Lugares Turisticos</h2>
        <ol>
          <li><a href="<?=base_url?>">Home</a></li>
          <li>Lugares Turisticos</li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Services Section -->

  <!-- ======= Service Details Section ======= -->
  <section class="service-details">
    <div class="container">
      <div class="row">
        <?php while ($lt = $luagarTuristico->fetch_object()) {
          if ($lt->estado == 1) {
        ?>
            <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="<?=base_url?>uploads/images/lugaresTuristicos/<?=$lt->imagen?>" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="<?=base_url?>LugaresTuristicos/vista&token=<?=$lt->token?>"><?=$lt->nombre ?></a></h5>
                  <p class="card-text"><?=substr($lt->descripcion_corta, 0, 100)?>...</p>
                  <div class="read-more"><a href="<?=base_url?>LugaresTuristicos/vista"><i class="icofont-arrow-right"></i> Ler más</a></div>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>

    </div>
  </section><!-- End Service Details Section -->

</main><!-- End #main -->
