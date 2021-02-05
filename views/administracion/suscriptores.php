<?php require_once 'views/administracion/header.php' ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Suscriptores </h1>
              <div class="box-tools pull-right">
              </div>
            </div>

            <div class="panel-body table-responsive" id="listadoProductos">
              <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover p-0">
                <thead>
                  <th>Correo</th>
                  <th>Fecha de Suscripcion</th>
                </thead>
                <?php while ($sus = $suscriptor->fetch_object()) {
                ?>
                  <tbody>
                    <td><?=$sus->correo?></td>
                    <td><?=$sus->fecha?></td>
                  </tbody>
                <?php
                }?>
                <tfoot>
                  <th>Correo</th>
                  <th>Fecha de Suscripcion</th>
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
