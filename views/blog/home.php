<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="<?=base_url?>">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">
            <?php
            if (isset($_SESSION['identity'])) {
            ?>
              <a href="<?=base_url?>Blog/crear" type="button" class="btn btn-outline-info btn-lg btn-block">Crear post</a>
              <hr>
            <?php
            }else {
            ?>
              <h5 class="text-center">Para poder crear un post debes <a href="<?=base_url?>Usuario/registro">iniciar sesión</a> </h5>
              <hr>
            <?php
            } ?>


            <?php while ($bg = $blog->fetch_object()) {
            ?>
              <article class="entry">

                <div class="entry-img">
                  <img src="<?=base_url?>uploads/images/blog/<?=$bg->imagen ?>" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="<?=base_url?>Blog/vista&token=<?=$bg->token ?>"><?=$bg->titulo ?></a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href=""><?=$bg->nombre ?></a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01"><?=$bg->fecha ?></time></a></li>
                    <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="">12
                        Comentarios</a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    <?=substr($bg->descripcion, 0, 290) ?>...
                  </p>
                  <div class="read-more">
                    <a href="<?=base_url?>Blog/vista&token=<?=$bg->token ?>">Leer más</a>
                  </div>
                </div>

              </article><!-- End blog entry -->
            <?php
            }
            ?>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Categorias</h3>
              <div class="sidebar-item categories">
                <ul>
                  <?php $categorias = Utils::showCategorias(); ?>
                  <?php
                    while ($cat = $categorias->fetch_object()) {
                      if ($cat->estado == 1) {
                  ?>
                      <li><a href="#"><?=$cat->nombre ?> <span>(25)</span></a></li>
                  <?php }} ?>
                </ul>

              </div><!-- End sidebar categories-->
              <h3 class="sidebar-title">Posts Recientes</h3>
              <div class="sidebar-item recent-posts">
                <?php while ($ps = $post->fetch_object()) {
                  ?>
                  <div class="post-item clearfix">
                    <img src="<?=base_url?>uploads/images/blog/<?=$ps->imagen ?>" alt="">
                    <h4><a href="<?=base_url?>Blog/vista&token=<?=$ps->token ?>"><?=$ps->titulo ?></a></h4>
                    <time datetime="2020-01-01"><?=$ps->fecha ?></time>
                  </div>
                  <?php
                }
                ?>
              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div><!-- End .row -->

      </div><!-- End .container -->

    </section><!-- End Blog Section -->

  </main><!-- End #main -->
