<?php require_once 'header.php' ?>

<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Mis Publicaciones <a class="btn btn-success" id="btnagregar" name="btnagregar" href="<?=base_url?>Blog/crear" role="button"><i class="fa fa-plus-circle"></i> Crear nuevo Post</a></h1>
            </div>
            <div class="panel-body p-4" id="formularioregistros">
              <!-- ======= Blog Section ======= -->
              <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                <div class="container">
                  <div class="row">
                    <?php while ($bg = $blog->fetch_object()) {
                    ?>
                      <div class="col-lg-6 entries">


                        <article class="entry">

                          <div class="entry-img">
                            <img src="<?=base_url?>uploads/images/blog/<?=$bg->imagen ?>" alt="" class="img-fluid">
                          </div>

                          <h2 class="entry-title">
                            <a href="blog-single.html"><?=$bg->titulo ?></a>
                          </h2>

                          <div class="entry-meta">
                            <ul>
                              <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?=$_SESSION['identity']->nombre ?></a></li>
                              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?=$bg->fecha ?></time></a></li>
                              <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12
                                  Comments</a></li>
                            </ul>
                          </div>

                          <div class="entry-content">
                            <p>
                              <?=substr($bg->descripcion, 0, 150) ?>
                            </p>
                            <div class="read-more">
                              <a href="<?=base_url?>Blog/editarBlog&token=<?=$bg->token ?>">Editar</a>
                            </div>
                          </div>
                        </article><!-- End blog entry -->
                      </div><!-- End blog entries list -->
                    <?php
                    }
                    ?>

                  </div><!-- End .row -->

                </div><!-- End .container -->

              </section><!-- End Blog Section -->
            </div>

          </div>
        </div>
      </div>
    </section>

  </div>
</div>

<?php require_once 'footer.php' ?>
