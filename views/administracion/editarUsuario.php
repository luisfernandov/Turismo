<?php require_once 'header.php' ?>

<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Usuarios </h1>
            </div>
            <div class="panel-body p-4" id="formularioregistros">
              <form action="<?=base_url?>Usuario/edit" id="formulario" method="post">
                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label>Nombre(*): </label>
                    <input type="hidden" name="id" value="<?=$user->id ?>">
                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="150" placeholder="Nombre" required value="<?=$user->nombre ?>">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Apellidos(*): </label>
                    <input type="text" class="form-control" name="apellidos" id="nombre" maxlength="150" placeholder="" required value="<?=$user->apellidos ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-8 col-md-6 col-sm-6 col-xs-12">
                    <label>Email: </label>
                    <input type="email" class="form-control" name="email" id="nombre" maxlength="150" placeholder="Nombre" required value="<?=$user->email ?>" readonly="readonly">
                  </div>
                  <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <label>Rol: </label>
                    <select name="rol" class="form-control">
                      <?php if ($user->rol == 'user'){?>
                        <option class="form-control" value="admin">Administrador</option>
                        <option class="form-control" value="user"  selected="selected">Usuario</option>
                      <?php }else {?>
                        <option class="form-control" value="admin" selected="selected">Administrador</option>
                        <option class="form-control" value="user"  >Usuario</option>
                      <?php
                      };?>
                    </select>
                  </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button class="btn btn-primary" type="submit" id="btnGuardar">
                    <i class="fa fa-arrow-circle-left"></i>
                    Guardar
                  </button>
                  <a class="btn btn-danger" role="button" href="<?=base_url?>Usuario/administracion">
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
