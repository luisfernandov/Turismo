<?php require_once 'views/administracion/header.php' ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Lugares Turisticos
                <a class="btn btn-success" id="btnagregar" name="btnagregar" href="<?=base_url?>lugaresTuristicos/agregar" role="button"><i class="fa fa-plus-circle"></i> Agregar</a>
              </h1>
              <div class="box-tools pull-right">
              </div>
            </div>

            <div class="panel-body table-responsive" id="listadoProductos">
              <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover p-0">
                <thead>
                  <th>Opciones</th>
                  <th>Nombre</th>
                  <th>Descripcion Corta</th>
                  <th>Dirección</th>
                  <th>Fecha</th>
                  <th>Comentarios</th>
                  <th>Estado</th>
                </thead>
                <?php while ($lt = $luagarTuristico->fetch_object()) {
                ?>
                  <tbody>
                    <td class="text-center"><?=$lt->estado == 1
                        ?'<a href="'.base_url.'LugaresTuristicos/desactivarLugarTuristico&id='.$lt->id.'" class="btn bg-danger text-white boton " data-placement="top" data-toggle="tooltip" title="Desactivar Lugar Turistico"><em class="fa fa-trash"></em></a>
                        <a href="'.base_url.'LugaresTuristicos/editarLugarTuristico&id='.$lt->id.'" class="btn bg-success text-white boton " data-placement="top" data-toggle="tooltip" title="Editar Lugar Turistico"><em class="fa fa-paint-brush"></em></a>
                        <a href="'.base_url.'Comentario/administrar&token='.$lt->token.'" class="btn bg-info text-white boton " data-placement="top" data-toggle="tooltip" title="Ver los Comentarios"><em class="fa fa-comments"></em></a>'
                        :'<a href="'.base_url.'LugaresTuristicos/activarLugarTuristico&id='.$lt->id.'" class="btn bg-warning text-white boton" title="Activar Lugar turistico"><em class="fa fa-check""></em></a>
                        <a href="'.base_url.'LugaresTuristicos/editarLugarTuristico&id='.$lt->id.'" class="btn bg-success text-white boton " data-placement="top" data-toggle="tooltip" title="Editar Lugar Turistico"><em class="fa fa-paint-brush"></em></a>'

                        ?></td>
                    <td><?=$lt->nombre?></td>
                    <td><?=$lt->descripcion_corta?></td>
                    <td><?=$lt->direccion?></td>
                    <td><?=$lt->fecha?></td>
                    <td>3 Comentarios</td>
                    <td><?=$lt->estado == 1 ? '<p class="text-success">Activo</p>' : '<p class="text-danger">No Activo</p>'?></td>
                  </tbody>
                <?php } ?>
                <tfoot>
                  <th>Opciones</th>
                  <th>Nombre</th>
                  <th>Descripcion Corta</th>
                  <th>Dirección</th>
                  <th>Fecha</th>
                  <th>Comentarios</th>
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
