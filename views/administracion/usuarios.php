<?php require_once 'views/administracion/header.php' ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Usuarios </h1>
              <div class="box-tools pull-right">
              </div>
            </div>

            <div class="panel-body table-responsive" id="listadoProductos">
              <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover p-0">
                <thead>
                  <th>Opciones</th>
                  <th>Nombre</th>
                  <th>apellidos</th>
                  <th>email</th>
                  <th>Rol</th>
                  <th>Estado</th>
                </thead>
                <?php while ($us = $usuario->fetch_object()) {
                ?>
                  <tbody>
                    <td class="text-center"><?=$us->estado == 1
                        ?'<a href="'.base_url.'Usuario/bloquearUsuario&id='.$us->id.'" class="btn bg-danger text-white boton " data-placement="top" data-toggle="tooltip" title="Bloquear Usuario"><em class="fa fa-ban"></em></a>
                        <a href="'.base_url.'Usuario/editarUsuario&id='.$us->id.'" class="btn bg-success text-white boton " data-placement="top" data-toggle="tooltip" title="Editar Usuario"><em class="fa fa-paint-brush"></em></a>'
                        :'<a href="'.base_url.'Usuario/desbloquearUsuario&id='.$us->id.'" class="btn bg-warning text-white boton" title="Desbloquear Usuario"><em class="fa fa-unlock-alt""></em></a>
                        <a href="'.base_url.'Usuario/editarUsuario&id='.$us->id.'" class="btn bg-success text-white boton " data-placement="top" data-toggle="tooltip" title="Editar Usuario"><em class="fa fa-paint-brush"></em></a>'

                        ?></td>
                    <td><?=$us->nombre ?></td>
                    <td><?=$us->apellidos ?></td>
                    <td><?=$us->email ?></td>
                    <td><?=$us->rol == 'user' ? 'Usuario' : 'administrador' ?></td>
                    <td><?=$us->estado == 1 ? '<p class="text-success">Activo</p>' : '<p class="text-danger">Bloqueado</p>'?></td>
                  </tbody>
                <?php
                }?>
                <tfoot>
                  <th>Opciones</th>
                  <th>Nombre</th>
                  <th>apellidos</th>
                  <th>email</th>
                  <th>Rol</th>
                  <th>Estado</th>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->
<?php require_once 'views/administracion/footer.php' ?>
