<main id="main">

  <!-- ======= Blog Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><?=$lt->nombre ?></h2>
        <ol>
          <li><a href="<?=base_url?>">Home</a></li>
          <li><a href="<?=base_url?>LugaresTuristicos/lista">Lugar Turistico</a></li>
          <li><?=$lt->nombre ?></li>
        </ol>
      </div>

    </div>
  </section><!-- End Blog Section -->

  <!-- ======= Blog Section ======= -->
  <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 entries">
          <article class="entry entry-single">
            <div class="entry-img">
              <img src="<?=base_url?>uploads/images/lugaresTuristicos/<?=$lt->imagen?>" alt="imagen" class="img-fluid">
            </div>
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i>
                  <a href="">
                    <time datetime="2020-01-01">
                      <?php
                        setlocale(LC_TIME, "spanish");
                        $fecha = $lt->fecha;
                        $fecha = str_replace("/", "-", $fecha);
                        $newDate = date("d-m-Y", strtotime($fecha));
                        $mesDesc = strftime("%A, %d de %B de %Y", strtotime($newDate));
                        echo $mesDesc;
                      ?>
                    </time>
                  </a>
                </li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i>
                  <a href="blog-single.html"><?= $count->cantidad;?> Comentarios</a></li>
              </ul>
            </div>
          </article><!-- End blog entry -->
        </div><!-- End blog entries list -->

        <div class="col-lg-6">
          <div class="sidebar">
            <h2 class="entry-title">
              <a href="blog-single.html">Descripción del lugar</a>
            </h2>
            <div class="entry-content">
              <p>
                <?=$lt->descripcion_corta ?>
              </p>
            </div>
          </div><!-- End sidebar -->
        </div><!-- End blog sidebar -->
      </div><!-- End row -->

      <div class="row">
        <div class="col-lg-12 entries">
          <article class="entry entry-single">
            <div class="entry-content">
              <p>
                <?=$lt->descripcion_larga ?>
              </p>
            </div>
            <div class="entry-footer clearfix">
              <div class="float-right share">
                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </article>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 entries">
          <article class="entry entry-single">
            <h3>Ubicación <small><?=$lt->direccion ?></small> </h3>
            <hr>
            <section class="map mt-2">
              <div class="container-fluid p-0">
                <?=$lt->ubicacion ?>
              </div>
            </section><!-- End Map Section -->
          </article>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 entries">
          <article class="entry entry-single">
            <div class="blog-comments">

              <h4 class="comments-count"><?= $count->cantidad;?> Comemtarios
              </h4>
              <?php while ($cm = $coment->fetch_object()) {
                if ($cm->estado == 1) {
              ?>
                  <div id="comment-1" class="comment clearfix">
                    <img src="<?=base_url?>uploads/images/perfiles/avatar.jpg" class="comment-img  float-left" alt="">
                    <h5><a href=""><?=$cm->nombre ?></a> </h5>
                    <?php
                          $present = date_create('now');
                          $future = date_create($cm->fecha);
                          $interval = date_diff($present, $future);
                          if ($interval->d == '0') {
                            $dato = $interval->format('Hace %i minutos');
                          }else {
                            $dato = $interval->format('Hace %d dias');
                            // var_dump($interval->d);
                          }
                    ?>
                    <time datetime="2020-01-01"><?=$dato; ?></time>
                    <p>
                      <?=$cm->comentario ?>
                    </p>
                  </div>
              <?php
                }
              }
              ?>

              <div class="reply-form">
                <h4>Deja tu comentario</h4>
                <?php if(!isset($_SESSION['identity'])){?>
                  <p>Para poder comentar este articulo debes <a href="<?=base_url?>Usuario/registro">iniciar sesion </a></p>
                <?php } if (isset($_SESSION['identity'])) {
                  ?>
                  <form action="<?=base_url?>Comentario/save" method="post">
                    <div class="row">
                      <div class="col form-group">
                        <input type="hidden" name="id_lugar_turistico" value="<?=$lt->id ?>">
                        <textarea name="comentario" class="form-control" placeholder="Escribe tu comentario..."></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Comentar</button>
                  </form>
                  <?php
                }?>


              </div>

            </div><!-- End blog comments -->
          </article>
        </div>
      </div>

    </div><!-- End container -->

  </section><!-- End Blog Section -->

</main><!-- End #main -->
