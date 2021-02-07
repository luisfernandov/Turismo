<?php require_once 'header.php' ?>

<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <?php
                if (isset($edit) && $edit == true) {
                  $url = base_url.'Blog/save&id='.$blog->id;
              ?>
                  <h1 class="box-title">Editar Post: <?=$blog->titulo ?> </h1>
              <?php
                }else {
                  $url = base_url.'Blog/save';
              ?>
                <h1 class="box-title">Crear nuevo Post</h1>
              <?php
              }
              ?>
            </div>
            <div class="panel-body p-4" id="formularioregistros">
              <form action="<?=$url?>" id="formulario" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Imagen: </label>
                    <?php
                      if (isset($blog) && is_object($blog) && !empty($blog->imagen)) {
                    ?>
                        <img src="<?=base_url?>uploads/images/blog/<?=$blog->imagen ?>"  class="rounded mx-auto d-block img-fluid" width="550px">
                    <?php
                      }
                    ?>
                    <input type="file" class="form-control" name="imagen" id="file" accept="image/*" onchange="mostrar()">
                    <img class="rounded mx-auto d-block img-fluid" height="250px" id="img">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Titulo(*): </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" maxlength="150" placeholder="Titulo del post" required value="<?=isset($blog) && is_object($blog) ? $blog->titulo : ''?>" >
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Reseña(*): </label>
                    <textarea id="editor" class="form-control" name="descripcion" rows="10" cols="80" placeholder="Reseña"><?=isset($blog) && is_object($blog) ? $blog->descripcion : ''?></textarea>
                  </div>
                </div>
                <!-- <div class="row" id="editor">
                  <div  class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    Escribe tus post...
                  </div>
                </div> -->

                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label>Categoria:(*) </label>
                    <?php $categorias = Utils::showCategorias(); ?>
                    <select class="form-control" name="categoria">
                      <?php
                        while ($cat = $categorias->fetch_object()) {
                      ?>
                          <option value="<?=$cat->id ?>"<?=isset($blog) && is_object($blog) && $cat->id == $blog->categoria_id ? 'selected' : ''?>>
                            <?=$cat->nombre ?>
                          </option>
                      <?php
                       }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button class="btn btn-primary" type="submit" id="btnGuardar">
                    <i class="fa fa-arrow-circle-left"></i>
                    Guardar
                  </button>
                  <a class="btn btn-danger" role="button" href="<?=base_url?>Blog/misPublicaciones">
                    <i class="fa fa-arrow-circle-left"></i>
                    Cancelar
                  </a>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>

  </div>
</div>

<?php require_once 'footer.php' ?>
