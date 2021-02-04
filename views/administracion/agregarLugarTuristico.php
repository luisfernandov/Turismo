<?php require_once 'header.php' ?>

<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <?php
                if (isset($edit) && $edit == true) {
                  $url = base_url.'LugaresTuristicos/save&id='.$lt->id;
              ?>
                  <h1 class="box-title">Editar: <?=$lt->nombre ?> </h1>
              <?php
                }else {
                  $url = base_url.'LugaresTuristicos/save';
              ?>
                <h1 class="box-title">Nuevo Lugar Turistico </h1>
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
                      if (isset($lt) && is_object($lt) && !empty($lt->imagen)) {
                    ?>
                        <img src="<?=base_url?>uploads/images/lugaresTuristicos/<?=$lt->imagen ?>"  class="rounded mx-auto d-block img-fluid" >
                    <?php
                      }
                    ?>
                    <input type="file" class="form-control" name="imagen" id="file" accept="image/*" onchange="mostrar()">
                    <img class="rounded mx-auto d-block img-fluid" height="250px" id="img">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Nombre(*): </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="150" placeholder="Nombre" required value="<?=isset($lt) && is_object($lt) ? $lt->nombre : ''?>" >
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Descripción Corta(*): </label>
                    <textarea class="form-control" name="descripcion_corta" rows="4" cols="80" placeholder="Descripción Corta"><?=isset($lt) && is_object($lt) ? $lt->descripcion_corta : ''?></textarea>
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Descripción Larga(*): </label>
                    <textarea class="form-control" name="descripcion_larga" rows="10" cols="80" placeholder="Descripción Larga"><?=isset($lt) && is_object($lt) ? $lt->descripcion_larga : ''?></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label>Dirección(*): </label>
                    <input type="text" class="form-control" name="direccion" id="direccion" maxlength="150" placeholder="Direccion" required value="<?=isset($lt) && is_object($lt) ? $lt->direccion : ''?>">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label>Ubicación(*): </label>
                    <input type="text" class="form-control" name="ubicacion" id="direccion" maxlength="150" placeholder="Ubicacion" required value="<?=isset($lt) && is_object($lt) ? $lt->ubicacion : ''?>">
                  </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button class="btn btn-primary" type="submit" id="btnGuardar">
                    <i class="fa fa-arrow-circle-left"></i>
                    Guardar
                  </button>
                  <a class="btn btn-danger" role="button" href="<?=base_url?>lugaresTuristicos/administracion">
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

<?php require_once 'footer.php' ?>
