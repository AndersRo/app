<div class="content-wrapper" style="min-height: 973px; padding: 15px;">
  <!-- page start-->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-body with-border">
          <div class="col-md-6">
            <h4><i class="fa fa-plus"></i> &nbsp; Nuevo Usuario</h4>
          </div>
          <div class="col-md-6 text-right">
            <a href="#" class="btn btn-success"><i class="fa fa-list"></i> Users List</a>
          </div>
        </div>
      </div>
    </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box border-top-solid">
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">

            <form action="" class="form-horizontal" method="post" accept-charset="utf-8">
            <?php echo form_hidden('token', $token) ?>

              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Nombres de Usuario</label>

                <div class="col-sm-9">
                  <input type="text" name="username" class="form-control" id="username" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Primer Nombre</label>

                <div class="col-sm-9">
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Segundo Nombre</label>

                <div class="col-sm-9">
                  <input type="text" name="firstname" class="form-control" id="secondname" placeholder="">
                </div>
              </div>


              <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">Primer Apellido</label>

                <div class="col-sm-9">
                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">Segundo Apellido</label>

                <div class="col-sm-9">
                  <input type="text" name="lastname" class="form-control" id="secondlastname" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Celular</label>

                <div class="col-sm-9">
                  <input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Select Group</label>

                <div class="col-sm-9">
                  <select name="group" class="form-control">
                    <option value="">Select Group</option>
                      <option value="202">Admin</option>
                      <option value="201">Soporte</option>
                      <option value="196">Cliente</option>
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
