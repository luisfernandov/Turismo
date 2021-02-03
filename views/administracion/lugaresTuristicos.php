<?php require_once 'views/administracion/header.php' ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Lugares Turisticos <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar" name="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
              <div class="box-tools pull-right">
              </div>
            </div>

            <div class="panel-body table-responsive" id="listadoProductos">
              <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover p-0">
                <thead>
                  <th>Opciones</th>
                  <th>Nombre</th>
                  <th>Imagen</th>
                  <th>Fecha</th>
                  <th>Estado</th>
                </thead>

                <tbody>
                  <td>1</td>
                  <td>Fernando</td>
                  <td>img.jpg</td>
                  <td>12-01-2021</td>
                  <td>activo</td>
                </tbody>
                <tbody>
                  <td>1</td>
                  <td>Fernando</td>
                  <td>img.jpg</td>
                  <td>12-01-2021</td>
                  <td>activo</td>
                </tbody>
                <tfoot>
                  <th>Opciones</th>
                  <th>Nombre</th>
                  <th>Imagen</th>
                  <th>Fecha</th>
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
