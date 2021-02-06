<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="<?=base_url?>">Home</a></li>
            <li><a href="<?=base_url?>Blog/index">Blog</a></li>
            <li><?=$blog->titulo ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
              <div class="entry-img">
                <img src="<?=base_url?>uploads/images/blog/<?=$blog->imagen ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html"><?=$blog->titulo ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?=$blog->nombre ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?=$blog->fecha ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?=$blog->descripcion ?>
                </p>
              </div>

              <div class="entry-footer clearfix">

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div>

            </article><!-- End blog entry -->

            <div class="blog-comments">

              <h4 class="comments-count">8 Comments</h4>

              <div id="comment-1" class="comment clearfix">
                <img src="<?=base_url?>assets/img/comments-1.jpg" class="comment-img  float-left" alt="">
                <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae
                  est qui cum soluta.
                  Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                </p>
              </div><!-- End comment #1 -->

              <div id="comment-2" class="comment clearfix">
                <img src="<?=base_url?>assets/img/comments-2.jpg" class="comment-img  float-left" alt="">
                <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                </p>

              </div><!-- End comment #2-->

              <div id="comment-3" class="comment clearfix">
                <img src="<?=base_url?>assets/img/comments-5.jpg" class="comment-img  float-left" alt="">
                <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium
                  tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste
                  at.
                  Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia
                  beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum
                  dolorem.
                </p>
              </div><!-- End comment #3 -->

              <div id="comment-4" class="comment clearfix">
                <img src="<?=base_url?>assets/img/comments-6.jpg" class="comment-img  float-left" alt="">
                <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut
                  maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                </p>

              </div><!-- End comment #4 -->

              <div class="reply-form">
                <h4>Deja tu comentario</h4>
                <p>Para poder comentar este articulo debes iniciar sesion * </p>
                <form action="">
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Escribe tu comentario..."></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Comentar</button>
                </form>
              </div>

            </div><!-- End blog comments -->

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
                <?php while ($p = $post->fetch_object()) {
                ?>
                  <div class="post-item clearfix">
                    <img src="<?=base_url?>uploads/images/blog/<?=$p->imagen ?>" alt="">
                    <h4><a href="<?=base_url?>Blog/vista"><?=$p->titulo ?></a></h4>
                    <time datetime="2020-01-01"><?=$p->fecha ?></time>
                  </div>
                <?php
                }
                ?>
              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div><!-- End row -->

      </div><!-- End container -->

    </section><!-- End Blog Section -->

  </main><!-- End #main -->
