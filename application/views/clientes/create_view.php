<div class="content-wrapper" style="min-height: 973px; padding: 15px;">
  <!-- page start-->
  <section class="content">
    <div class="row">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Nueva Orden.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box border-top-solid">
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">

            <form action="" class="form-horizontal" method="post" accept-charset="utf-8">
            <!-- <?php echo form_hidden('token', $token) ?> -->

            <div class="form-group">
              <label for="role" class="col-sm-2 control-label">Empresa</label>

              <div class="col-sm-4">
                <select name="tipoper" id="tipoper" class="form-control">
                  <?php
                      foreach ($tipopersonas as $row) {
                          echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                      }

                   ?>
              </select>
              </div>
            </div>

            <div class="form-group">
              <label for="role" class="col-sm-2 control-label">Mecanico</label>

              <div class="col-sm-4">
                <select name="tipoper" id="tipoper" class="form-control">
                  <?php
                      foreach ($tipopersonas as $row) {
                          echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                      }

                   ?>
              </select>
              </div>
            </div>

            <div class="form-group">
              <label for="role" class="col-sm-2 control-label">Cliente</label>

              <div class="col-sm-4">
                <select name="tipoper" id="tipoper" class="form-control">
                  <?php
                      foreach ($tipopersonas as $row) {
                          echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                      }

                   ?>
              </select>
              </div>
            </div>

            <div class="form-group">
              <label for="role" class="col-sm-2 control-label">Vehiculo</label>

              <div class="col-sm-4">
                <select name="tipoper" id="tipoper" class="form-control">
                  <?php
                      foreach ($tipopersonas as $row) {
                          echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                      }

                   ?>
              </select>
              </div>
            </div>

            <div class="form-group">
              <label for="role" class="col-sm-2 control-label">Taller</label>

              <div class="col-sm-4">
                <select name="tipoper" id="tipoper" class="form-control">
                  <?php
                      foreach ($tipopersonas as $row) {
                          echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                      }

                   ?>
              </select>
              </div>
            </div>

              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Agregar Usuario" class="btn btn-info pull-right">
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>

</section> 						<!-- page end-->

</div>
