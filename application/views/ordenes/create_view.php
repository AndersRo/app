<div class="content-wrapper" style="min-height: 973px; padding: 15px;">

  <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Orden</a></li>
              <li><a href="#tab_2" data-toggle="tab">Contrato</a></li>
              <li><a href="#tab_3" data-toggle="tab">Usuario</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <section class="content">
                  <div class="row">
                    <div class="row">
                      <div class="col-xs-12">
                        <h2 class="page-header">
                          <i class="fa fa-globe"></i> Nueva Orden.
                          <small class="pull-right"><?php echo "Fecha: " . date("d") . " de " . date("m") . " del " . date("Y"); ?></small>
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

                          <form action="" class="form-horizontal" id="frm-ordenes" method="post" accept-charset="utf-8">
                          <?php echo form_hidden('token', $token) ?>

                          <div class="col-sm-6">

                              <input type="hidden" name="cadenadetalle" class="form-control" id="cadenadetalle">

                            <div class="form-group" hidden>
                              <label for="txttipm" class="col-sm-2 control-label">Tipo Mant</label>

                              <div class="col-sm-10">
                                <input type="text" name="txttipm" class="form-control" id="txttipm" placeholder="">
                              </div>
                            </div>

                            <div class="form-group" hidden>
                              <label for="idorden" class="col-sm-2 control-label">Ord. Nro.</label>

                              <div class="col-sm-4">
                                <input type="text" name="idorden" class="form-control" id="idorden" placeholder="">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">Estado</label>

                              <div class="col-sm-10">
                                <select name="estado" id="estado" class="form-control">
                                  <?php
                                      foreach ($orden as $row) {
                                          echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                                      }

                                   ?>
                              </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">Empresa</label>

                              <div class="col-sm-10">
                                <select name="idempresa" id="idempresa" class="form-control selectpicker" data-live-search="true">
                                  <?php
                                      foreach ($empresas as $row) {
                                          echo '<option value="'.$row->IdEmpresa.'">'.$row->NombreComercial.'</option>';
                                      }

                                   ?>
                              </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">Taller</label>

                              <div class="col-sm-10">
                                <select name="idtaller" id="idtaller" class="form-control selectpicker" data-live-search="true">
                                  <?php
                                      foreach ($talleres as $row) {
                                          echo '<option value="'.$row->IdTaller.'">'.$row->Descripcion.'</option>';
                                      }

                                   ?>
                              </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">Cliente</label>

                              <div class="col-sm-10">
                                <select name="idcliente" id="idcliente" class="form-control selectpicker" data-live-search="true">
                                  <?php
                                      foreach ($clientes as $row) {
                                          echo '<option value="'.$row->IdCliente.'">'.$row->Cliente.'</option>';
                                      }

                                   ?>
                              </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">Vehiculo</label>

                              <div class="col-sm-10">
                                <select name="idvehiculo" id="idvehiculo" class="form-control selectpicker" data-live-search="true">
                                  <?php
                                      foreach ($vehiculos as $row) {
                                          echo '<option value="'.$row->IdVehiculo.'">'.$row->vehiculo.'</option>';
                                      }

                                   ?>
                              </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">Mecanico</label>

                              <div class="col-sm-10">
                                <select name="idmecanico" id="idmecanico" class="form-control selectpicker" data-live-search="true">
                                  <?php
                                      foreach ($mecanicos as $row) {
                                          echo '<option value="'.$row->IdMecanico.'">'.$row->Mecanico.'</option>';
                                      }

                                   ?>
                              </select>
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="role" class="col-sm-3 control-label">Programada:</label>

                                <div class="input-group date col-sm-3">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                <!-- /.input group -->
                              </div>

                              <div class="form-group">
                                <label for="role" class="col-sm-3 control-label">Ejecucion:</label>

                                <div class="input-group date col-sm-3">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="idatepicker">
                                </div>
                                <!-- /.input group -->
                              </div>

                          </div>

                          <div class="col-sm-6">

                            <div class="form-group">
                              <label for="observacion">Observacion</label>
                              <textarea class="form-control" id="observacion" rows="5"></textarea>
                            </div>

                          </div>

                          <div class="row">
                            <div class="col-xs-12">
                              <h2 class="page-header">
                                <i class="fa fa-globe"></i> Orden Detalle.
                                <a class="btn btn-primary btn-xs" id="item" data-toggle="modal"><span class="fa fa-plus"></span></a>
                              </h2>
                            </div>
                            <!-- /.col -->
                          </div>
                            <div class="col-sm-12">
                              <div class="table-responsive">
                              <table class="table" id="tabledis">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Dispositivo</th>
                                    <th scope="col">Sim</th>
                                    <th scope="col">Idn</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>
                                      <select name="tipotrabajo1" id="tipotrabajo1" class="form-control">
                                      <?php
                                          foreach ($trabajo as $row) {
                                              echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                                          }

                                       ?>
                                     </select>
                                  </td>

                                    <td>
                                      <div class="input-group input-group-sm">
                                              <input type="text" id="iddispositivo1" class="form-control">
                                                <span class="input-group-btn">
                                                  <button type="button" class="btn btn-info btn-flat new-modal" data-toggle="modal" data-target="#modal-dispositivo">...</button>
                                                  <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                                                </span>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="input-group date">
                                        <div class="input-group-addon">
                                          <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" id="nrosim1" class="form-control"
                                               data-inputmask="'mask': ['999999999', '+99999999999']" data-mask>
                                      </div>
                                  </td>

                                    <td>
                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-asterisk"></i>
                                        </div>
                                        <input type="text" name="idn1" class="form-control" id="idn1" placeholder="Nro IDN">
                                    </div>
                                  </td>

                                  </tr>

                                </tbody>
                              </table>
                              </div>

                            </div>

                          </form>
                        </div>
                        <!-- /.box-body -->

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          <button type="button" id="btnguardar" name="btnguardar" class="btn btn-primary">Guardar Cambios</button>
                          <a class="btn btn-app" id="savet">
                            <i class="fa fa-save"></i> Save
                          </a>
                        </div>
                    </div>
                  </div>
                </div>

              </section>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">


                <div class="content">
                  <section class="content-header">
                    <h1>
                      <i class="fa fa-globe"></i> Nuevo Contrato.
                      <small class="pull-right"><?php echo "Fecha: " . date("d") . " de " . date("m") . " del " . date("Y"); ?></small>
                    </h1>
                  </section>

                  <section class="content">
                    <div class="row">
                      <div class="col-sx-12">
                        <div class="box box-warning">

                          <div class="box-header with-border">
                            <h3 class="box-title">Información de contratos</h3>
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-default btn_save"><i class="fa fa-save"></i> Guardar Contrato </button>
                            </div>
                          </div>

                          <div class="box-body">

                            <form action="" class="form-horizontal" id="frm-contratos" method="post" accept-charset="utf-8">
                            <?php echo form_hidden('token', $token) ?>

                            <div class="row">
                              <div class="col-sm-6">

                                  <input type="hidden" name="cadenadetalleanex" class="form-control" id="cadenadetalleanex">

                                <div class="form-group" hidden>
                                  <label for="txttipmcon" class="col-sm-2 control-label">Tipo Mant</label>

                                  <div class="col-sm-10">
                                    <input type="text" name="txttipmcon" class="form-control" id="txttipmcon" placeholder="">
                                  </div>
                                </div>

                                <div class="form-group" hidden>
                                  <label for="idordencon" class="col-sm-2 control-label">Ord. Nro.</label>

                                  <div class="col-sm-4">
                                    <input type="text" name="idordencon" class="form-control" id="idordencon" placeholder="">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="role" class="col-sm-2 control-label">Servicio</label>

                                  <div class="col-sm-10">
                                    <select name="servicio" id="servicio" class="form-control">
                                      <?php
                                          foreach ($servicio as $row) {
                                              echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                                          }

                                       ?>
                                  </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="role" class="col-sm-2 control-label">Cliente</label>

                                  <div class="col-sm-10">
                                    <select name="idclientec" id="idclientec" class="form-control selectpicker" data-live-search="true">
                                      <?php
                                          foreach ($clientes as $row) {
                                              echo '<option value="'.$row->IdCliente.'">'.$row->Cliente.'</option>';
                                          }

                                       ?>
                                  </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="role" class="col-sm-2 control-label">Vehiculo</label>

                                  <div class="col-sm-10">
                                    <select name="idvehiculoc" id="idvehiculoc" class="form-control selectpicker" data-live-search="true">
                                      <?php
                                          foreach ($vehiculos as $row) {
                                              echo '<option value="'.$row->IdVehiculo.'">'.$row->vehiculo.'</option>';
                                          }

                                       ?>
                                  </select>
                                  </div>
                                </div>

                              </div>

                              <div class="col-sm-6">

                                <div class="form-group">
                                  <label for="role" class="col-sm-2 control-label">Contrato</label>

                                  <div class="col-sm-10">
                                    <select name="tipcontrato" id="tipcontrato" class="form-control">
                                      <?php
                                          foreach ($orden as $row) {
                                              echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                                          }

                                       ?>
                                  </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="role" class="col-sm-2 control-label">Empresa</label>

                                  <div class="col-sm-10">
                                    <select name="idempresac" id="idempresac" class="form-control selectpicker" data-live-search="true">
                                      <?php
                                          foreach ($empresas as $row) {
                                              echo '<option value="'.$row->IdEmpresa.'">'.$row->NombreComercial.'</option>';
                                          }

                                       ?>
                                  </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="role" class="col-sm-2 control-label">Estado</label>

                                  <div class="col-sm-10">
                                    <select name="stdcontrato" id="stdcontrato" class="form-control">
                                      <?php
                                          foreach ($orden as $row) {
                                              echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                                          }

                                       ?>
                                  </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="role" class="col-sm-2 control-label">Orden</label>
                                  <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                            <input type="text" id="iddispositivo1" class="form-control">
                                              <span class="input-group-btn">
                                                <button type="button" class="btn btn-info btn-flat new-modal" id="abrirorden">...</button>
                                                <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                                              </span>
                                    </div>
                                  </div>

                                </div>

                              </div>
                            </div>

                            <div class="row">
                              <div class="col-xs-12">
                                <div class="box box-primary">
                                  <div class="box-header with-border">
                                    <i class="fa fa-globe"></i> Anexo Orden.
                                  <div class="btn-group pull-right" style="margin-right: 40px;" >
                                      <button type="button" class="btn btn-default badd_doc" id="item2" data-toggle="modal"><i class="fa fa-plus"></i> Agregar</button>
                                      <button type="button" class="btn btn-default bdel_doc"><i class="fa fa-minus"></i>Quitar</button>
                                  </div>

                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body">
                                          <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                                          <div class="col-sm-12">

                                            <div class="table-responsive">
                                            <table class="table" id="tablecon">
                                              <thead class="thead-dark">
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Tipo de documento</th>
                                                  <th scope="col">Ruta</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td>
                                                    <select name="docanexo" id="docanexo" class="form-control">
                                                    <?php
                                                        foreach ($danexos as $row) {
                                                            echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                                                        }
                                                     ?>
                                                   </select>
                                                </td>

                                                <td>
                                                  <div class="input-group input-group-sm">
                                                    <input name="druta" id="druta" type="file" class="file-control">
                                                  </div>
                                                </td>

                                                </tr>
                                              </tbody>
                                            </table>
                                            </div>

                                          </div>
                                  </div>
                                </div>
                              </div>
                           </div>

                            </form>
                          </div>

                          <div class="box-footer">
                              <div class="btn-group pull-right" >
                                  <button type="button" class="btn btn-default btn_savecon" id="btn_savecon"><i class="fa fa-save"></i> Guardar Anexo </button>
                                  <button type="button" class="btn btn-default btn_listar"><i class="fa fa-mail-reply"></i> Listar</button>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">

                <div class="content">
                  <!-- Content Header (Page header) -->
                  <section class="content-header">
                      <h1>
                          ALTA DE USUARIO
                          <small></small>
                      </h1>
                  </section>

                  <section class="content">
                      <!-- SELECT2 EXAMPLE -->

                    <div class="row">
                      <div class="col-xs-12">
                        <div class="box box-warning">
                          <div class="box-header with-border">
                            <h3 class="box-title">Información de usuarios</h3>
                            <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-default btn_save"><i class="fa fa-save"></i> Guardar Usuario </button>
                            </div>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                              <form role="form" id="frmdata">
                                  <input type="hidden" name="idclienteu" id="idclienteu">
                                  <input type="hidden" name="cadenahorarios" id="cadenahorarios">

                                  <div class="row">
                                      <div class="col-md-6">
                                      <!-- /.form-group -->
                                        <div class="form-group">
                                          <label>Cliente</label>
                                          <div class="input-group input-group-sm">
                                              <input type="text" id="cliente" class="form-control">
                                              <span class="input-group-btn">
                                                    <button type="button" class="btn btn-info btn-flat new-modal" data-toggle="modal" data-target="#myModalAsig">...</button>
                                                      <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                                              </span>
                                          </div>
                                        </div>

                                        <!-- /.form-group -->
                                        <div class="form-group">
                                          <label>
                                            <input type="checkbox" class="flat-red" checked>
                                            Acceso Web
                                          </label>
                                          <label>
                                            <input type="checkbox" class="flat-red">
                                            Acceso Movil
                                          </label>
                                      </div>

                                      </div>
                                      <!-- /.col -->
                                      <div class="col-md-6" >
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                          <label>Nombre de Usuario</label>
                                          <input type="text" class="form-control" name="nombreusuario" id="nombreusuario">
                                        </div>

                                      <!-- /.form-group -->
                                        <div class="form-group">
                                          <label>Clave</label>
                                          <input type="password" class="form-control" name="password" id="password">
                                        </div>

                                        <!-- /.form-group -->
                                          <div class="form-group">
                                            <label>Clave ON/OFF</label>
                                            <input type="password" class="form-control" name="onoff" id="onoff">
                                          </div>
                                      </div>
                                      <!-- /.col -->
                                    </div>

                              </form>
                          </div>

                          <!-- /.box-body -->
                          <div class="box-footer">
                              <div class="btn-group pull-right" >
                                  <button type="button" class="btn btn-default btn_save"><i class="fa fa-save"></i> Guardar </button>
                                  <button type="button" class="btn btn-default btn_cancel"><i class="fa fa-mail-reply"></i> Cancelar</button>
                              </div>
                          </div>

                        </div>
                      </div>
                   </div>


                  </section>
                  <!-- /.content -->

                  <!-- Modal -->
                  <div class="modal fade" id="myModalAsig" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Agregar Clientes</h4>
                              </div>

                              <div class="modal-body">
                                  <!-- form start -->
                                      <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                                      <div>
                                          <table id="tdatosc"> </table>
                                          <div id="pagerc"></div>
                                      </div>
                              </div>

                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <button type="button" class="btn btn-primary btn_saveuser">Aceptar</button>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>


              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
  <!-- page start-->
  					<!-- page end-->

</div>
</div>

        <!-- Modal -->
            <div class="modal fade" id="modal-dispositivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Agregar Dispositivo</h4>
                        </div>

                        <div class="modal-body">
                            <!-- form start -->
                            <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                            <div>
                                <table id="tdatosd"> </table>
                                <div id="pagerd"></div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary btn_savedis">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
                <div class="modal fade" id="modal-orden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Agregar Orden</h4>
                            </div>

                            <div class="modal-body">
                                <!-- form start -->
                                <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                                <div>
                                    <table id="tdatoso"> </table>
                                    <div id="pagero"></div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary btn_savedis">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>


<script type="text/javascript">
  var $grid = $("#tdatosd"),
      newWidth = $grid.closest(".ui-jqgrid").parent().width();
  $.jgrid.defaults.width = newWidth;
  $.jgrid.defaults.responsive = true;
  $.jgrid.defaults.styleUI = 'Bootstrap';

  $("#txttipm").val( "N" );
  $("#txttipmcon").val( "N" );
  $("#idorden").val( "0" );
  $("#idordencon").val( "0" );
</script>

<script type="text/javascript">
  dispositivo={
    init:function()
    {
      var gdatadetalle=new Array();
      dispositivo.listar();
      dispositivo.listaruser();
      dispositivo.listarorden();

		$( "#btnguardar" ).on( "click", function() {

      var campo1, campo2, campo3, campo4;
      var scadena="";

      $("#tabledis tbody tr").each(function () {
            var campo1=$(this).find("td:eq(0) select").val(); //Tipo
            var campo2=$(this).find("td:eq(1) input").val(); //Dispositivo
            var campo3=$(this).find("td:eq(2) input").val(); //SIM
            var campo4=$(this).find("td:eq(3) input").val(); //IDN

          scadena=scadena + campo1 + "|" + campo2 + "|" + campo3 + "|" + campo4 + "|";

       });
       $("#cadenadetalle").val(scadena);
		    dispositivo.guardar();
		});

    $( "#btn_savecon" ).on( "click", function() {

      var campo1, campo2;
      var scadena="";

      $("#tablecon tbody tr").each(function () {
            var campo1=$(this).find("td:eq(0) select").val(); //Tipo Documento
            var campo2=$(this).find("td:eq(1) input").val(); //Ruta Documento

          scadena=scadena + campo1 + "|" + campo2 + "|";

       });
      //alert(scadena);
       $("#cadenadetalleanex").val(scadena);
		    dispositivo.guardarcontrato();
		});

    $("#abrirorden").on("click", function(){
      //Volviendo a pasar los parametros de busqueda
        var myfilter = { groupOp: "AND", rules: []};
        myfilter.rules.push({field:"IdCliente",op:"bw",data:$("#idclientec").val()});
        $('#tdatoso').jqGrid('setGridParam', {search: true
            , postData: {
             'filters': JSON.stringify(myfilter)
                        }
                      }
                  );
          $('#tdatoso').trigger('reloadGrid');
      $("#modal-orden").modal('show');
    });

    $("#iddispositivo").change(function(){
      var selectValue = $(this).val()
      dispositivo.some_function(selectValue);
	   });

     /*$("#savet").click(function () {
	//$("#tabledis tbody tr").each(function (index) {
    	var campo1, campo2, campo3, campo4;
      var scadena="";

  $("#tabledis tbody tr").each(function () {
        var campo1=$(this).find("td:eq(0) select").val(); //Tipo
        var campo2=$(this).find("td:eq(1) input").val(); //Dispositivo
        var campo3=$(this).find("td:eq(2) input").val(); //SIM
        var campo4=$(this).find("td:eq(3) input").val(); //IDN

        //var wnumcadc=$(this).find("td:eq(15) input").val(); /*Costo Adicionadl*/
        //var wnumcdsc=$(this).find("td:eq(16) input").val(); /*Descuento*/
        //var wnumst=$(this).find("td:eq(17)").html(); /*S.T*/
      //cadena+= codvhc + '|' + codpre + '|' + codfib + '|' + wnumpre + '|' + wnumcadc + '|' + wnumcdsc + '|' + wnumst + '|' ;
      //alert(campo1 + ' - ' + campo2 + ' - ' + campo3 + ' - ' + campo4);

      //var scadena="";
      //scadena=scadena + campo1 + "|" + campo2 + "|" + campo3 + "|" + campo4 + "|";

      //$.each(gdatadetalle, function( index, e ){
        //  scadena=scadena + e[0].campo1 + "|" + e[0].campo2 + "|" + e[0].campo3 + "|" + e[0].campo4 + "|";
      //})

      //$("#cadenadetalle").val(scadena);
      //$("#frmdata").submit();
   //});
  //var trs=$("#tabledis tr").length;
  //var celdas = $(filas[i]).find("td");
  /*
	$(this).children("td").each(function (index2) {
		 switch (index2) {
			 case 0:
				campo1 = $($(this).children("select")).val();
        //$($(celdas[2]).children("input")[0]).val();
        //campo2 = $($(this).children("input")).val();
				break;
			 case 1:
				campo2 = $($(this).children("input")).val();
				break;
			 case 2:
				campo3 = $($(this).children("input")).val();
				break;
       case 3:
        campo4 = $($(this).children("input")).val();
        break;
			}
			$(this).css("background-color", "#ECF8E0");
		})

		//alert(campo1 + ' - ' + campo2 + ' - ' + campo3 + ' - ' + campo4);
	//})
$("#cadenadetalle").val(scadena);

});*/

     $(".btn_savedis").click(function(event)
        {
          event.returnValue = false; /*para I.E.*/
          if(event.preventDefault) event.preventDefault();

            var selr = $("#tdatosd").jqGrid('getGridParam', 'selrow');
              if(selr) {
                var rowDatasel = $("#tdatosd").jqGrid('getRowData', selr);
                var grid = $("#tdatosd");
                var rowKey = grid.jqGrid('getGridParam',"selrow");

                  var iddis = rowDatasel.iddispositivo
                  var modelo = rowDatasel.modelo;
                  var sim = rowDatasel.nrosim
                  var idn = rowDatasel.nroIDN;

                    var trs=$("#tabledis tr").length;
                    for(var i=0;i<trs;i++){

                      if (rowKey) {
                        //(trs-1);
                        //$("#iddispositivo"+(trs-1)+"").val(iddis+"-"+modelo);
                        $("#iddispositivo"+(trs-1)+"").val(iddis);
                        $("#nrosim"+(trs-1)+"").val(sim);
                        $("#idn"+(trs-1)+"").val(idn);
                      }else{
                        alert("No rows are selected");
                      }
                    }
                      $('#modal-dispositivo').modal('hide');

                    }else {
                      waitingDialog.hide();
                      //bootbox.alert("Error! : . " + wmsg);
                      swal({
                        title: "Error!",
                        text: "Debe seleccionar algun dato!",
                        type: "warning",
                      });
                        return false;
                    }
            });

            $(".btn_saveuser").click(function(event)
               {
                 event.returnValue = false; /*para I.E.*/
                 if(event.preventDefault) event.preventDefault();

                   var selr = $("#tdatosc").jqGrid('getGridParam', 'selrow');
                     if(selr) {
                       var rowDatasel = $("#tdatosc").jqGrid('getRowData', selr);
                       var grid = $("#tdatosc");
                       var rowKey = grid.jqGrid('getGridParam',"selrow");

                         var idcli = rowDatasel.IdCliente;
                         var apa = rowDatasel.Apellido_Paterno;
                         var ama = rowDatasel.Apellido_Materno;
                         var nom = rowDatasel.PrimerNombre;
                         var snom = rowDatasel.SegundoNombre;

                               //$("#iddispositivo"+(trs-1)+"").val(iddis+"-"+modelo);
                               $("#idclienteu").val(idcli);
                               $("#cliente").val(apa+" "+ama+" "+nom);
                               //$("#nrosim").val(sim);
                               //$("#idn").val(idn);


                             $('#myModalAsig').modal('hide');

                           }else {
                             waitingDialog.hide();
                             //bootbox.alert("Error! : . " + wmsg);
                             swal({
                               title: "Error!",
                               text: "Debe seleccionar algun dato!",
                               type: "warning",
                             });
                               return false;
                           }
                       });

                       $(".btn_saveorden").click(function(event)
                          {
                            event.returnValue = false; /*para I.E.*/
                            if(event.preventDefault) event.preventDefault();

                              var selr = $("#tdatoso").jqGrid('getGridParam', 'selrow');
                                if(selr) {
                                  var rowDatasel = $("#tdatoso").jqGrid('getRowData', selr);
                                  var grid = $("#tdatoso");
                                  var rowKey = grid.jqGrid('getGridParam',"selrow");

                                    var idcli = rowDatasel.IdOrden;
                                    var apa = rowDatasel.Apellido_Paterno;
                                    var ama = rowDatasel.Apellido_Materno;
                                    var nom = rowDatasel.PrimerNombre;
                                    var snom = rowDatasel.SegundoNombre;

                                          //$("#iddispositivo"+(trs-1)+"").val(iddis+"-"+modelo);
                                          $("#idclienteu").val(idcli);
                                          $("#cliente").val(apa+" "+ama+" "+nom);
                                          //$("#nrosim").val(sim);
                                          //$("#idn").val(idn);


                                        $('#myModalAsig').modal('hide');

                                      }else {
                                        waitingDialog.hide();
                                        //bootbox.alert("Error! : . " + wmsg);
                                        swal({
                                          title: "Error!",
                                          text: "Debe seleccionar algun dato!",
                                          type: "warning",
                                        });
                                          return false;
                                      }
                                  });

    $("#item").on("click", function () {
        var trs=$("#tabledis tr").length;
        var campo = $('#iddispositivo'+(trs-1)+'').val();
        if (campo === '') {
          swal({
            title: "Vacios!",
            text: "Complete los campos requeridos!",
            type: "warning",
          });
        }else{
        for(var i=0;i<trs;i++){
            var fila='<tr><th>'+(i+1)+'</th>'+

            '<td> <select name="tipotrabajo" id="tipotrabajo'+(i+1)+'" class="form-control"><?php foreach ($trabajo as $row) {echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';} ?>º</select></td>'+

            '<td><div class="input-group input-group-sm"><input name="iddispositivo'+(i+1)+'" id="iddispositivo'+(i+1)+'" type="text" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-info btn-flat new-modal" data-toggle="modal" data-target="#modal-dispositivo">...</button></span></div></td>'+

            '<td><div class="input-group date"><div class="input-group-addon"><i class="fa fa-phone"></i></div><input type="text" id="nrosim'+(i+1)+'" class="form-control" data-inputmask="" data-mask></div></td>'+

            '<td><div class="input-group"><div class="input-group-addon"><i class="fa fa-asterisk"></i></div><input type="text" name="idn'+(i+1)+'" class="form-control" id="idn'+(i+1)+'" placeholder="Nro IDN"></div></td></tr>';
       }

        $("#tabledis").append(fila);
      }
    });

    $("#item2").on("click", function () {
        // Obtenemos el numero de filas (td) que tiene la primera columna
        // (tr) del id "tabla"
        //var tds=$("#tabledis tr:first td").length;
        // Obtenemos el total de columnas (tr) del id "tabla"
        var trs=$("#tablecon tr").length;
        //var nuevaFila="<tr>";
        for(var i=0;i<trs;i++){
            // añadimos las columnas
            //alert((i+1));
            var fila='<tr><th>'+(i+1)+'</th>'+
            '<td><select name="docanexo'+(i+1)+'" id="docanexo'+(i+1)+'" class="form-control"><?php foreach ($danexos as $row) {echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';}?></select> </td>'+

            '<td><div class="input-group input-group-sm"><input name="druta'+(i+1)+'" id="druta'+(i+1)+'" type="file" class="file-control"></div></td></tr>';
            //"<td>columna "+(i+1)+" Añadida con jquery</td>";
       }

        $("#tablecon").append(fila);
    });

    }

    ,some_function:function(strA_valor)
    {
          var wurl="<?php echo base_url('dispositivos/listgg'); ?>";

          $.ajax({
            async: true,
            url: wurl,
            type: "post",
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data://$("#frm-clientes").serialize(),
            {
              'iddispositivo':strA_valor
            },
            beforeSend: function(data){

            },
            complete: function(data, status){

              var json = JSON.parse(data.responseText);
                $("#nrosim").val( json[0].NroSim );
                $("#idn").val( json[0].NroIDN );

              }
          });

    }

    ,guardar:function()
  	{

  		  var wurl="<?php echo base_url('Ordenes/store'); ?>";

  		  $.ajax({
  				async: true,
  				url: wurl,
  				type: "post",
  				dataType: 'json',
  				contentType: 'application/x-www-form-urlencoded',
  				data://$("#frm-ordenes").serialize(),
          {
            'opcion1':$("#txttipm").val()
            ,'idorden':$("#idorden").val()
            ,'idempresa':$("#idempresa").val()
            ,'idmecanico':$("#idmecanico").val()
            ,'idcliente':$("#idcliente").val()
            ,'idvehiculo':$("#idvehiculo").val()
            ,'estado':$("#estado").val()
            ,'observacion':$("#observacion").val()
            ,'datepicker':$("#datepicker").val()
            ,'idatepicker':$("#idatepicker").val()
            ,'idtaller':$("#idtaller").val()
            ,'cadenadetalle':$("#cadenadetalle").val()
            //,'iddispositivo':$("#iddispositivo").val()
            //,'nrosim':$("#nrosim").val()
            //,'idn':$("#idn").val()
          },

  				beforeSend: function(data){
            waitingDialog.show('Procesando...', {dialogSize: 'sm'});
  				},
  				complete: function(data, status){
					//alert('completado');

            if (status=="success"){

                var werror=JSON.parse(data.responseText).error;
                var wmsg=JSON.parse(data.responseText).mensaje;
                  if (werror==0)
                        {
                            var wcodigo=JSON.parse(data.responseText).id;
                            var mensajeview=""
                            waitingDialog.hide();
                            if ($("#txttipm").val()=="N")
                            {
                              mensajeview="Registro Exitoso!";
                            }else if($("#txttipm").val()=="U"){
                              mensajeview="Registro actualizado correctamente!";
                            }else{
                              mensajeview="Registro eliminado correctamente!";
                            }
                            //bootbox.alert(mensajeview);
                            //compras.limpiarcampos();
                            swal(mensajeview, "Clickea para continuar!", "success");
                        }
                    else
                      {
                          waitingDialog.hide();
                          //bootbox.alert("Error! : . " + wmsg);
                          swal({
                            title: "Error!",
                            text: wmsg,
                            type: "warning",
                          });
                      }

                  }
                  else
                    {
                      waitingDialog.hide();
                      //bootbox.alert("Error! : Ocurrio algo inesperado, intente más tarde!");
                      swal({
                        title: "Error!",
                        text: "Ocurrio algo inesperado, intente más tarde!",
                        type: "warning",
                      });
                    }

                    //waitingDialog.hide();
                    //$('#modal-default').modal('hide');
                    //$('#tdatos').trigger( 'reloadGrid' );
  				}
  		  });
  	}

    ,guardarcontrato:function()
  	{

  		  var wurl="<?php echo base_url('Contratos/store'); ?>";

  		  $.ajax({
  				async: true,
  				url: wurl,
  				type: "post",
  				dataType: 'json',
  				contentType: 'application/x-www-form-urlencoded',
  				data://$("#frm-contratos").serialize(),
          {
            'opcion1':$("#txttipmcon").val()
            ,'idcontrato':$("#idordencon").val()
            ,'servicio':$("#servicio").val()
            ,'idcliente':$("#idclientec").val()
            ,'tipcontrato':$("#tipcontrato").val()
            ,'idempresa':$("#idempresa").val()
            ,'idvehiculo':$("#idvehiculo").val()
            ,'stdcontrato':$("#stdcontrato").val()
            ,'idorden':$("#idorden").val()
            ,'cadenadetalleanex':$("#cadenadetalleanex").val()
          },

  				beforeSend: function(data){
            waitingDialog.show('Procesando...', {dialogSize: 'sm'});
  				},
  				complete: function(data, status){
					//alert('completado');

            if (status=="success"){

                var werror=JSON.parse(data.responseText).error;
                var wmsg=JSON.parse(data.responseText).mensaje;
                  if (werror==0)
                        {
                            var wcodigo=JSON.parse(data.responseText).id;
                            var mensajeview=""
                            waitingDialog.hide();
                            if ($("#txttipm").val()=="N")
                            {
                              mensajeview="Registro Exitoso!";
                            }else if($("#txttipm").val()=="U"){
                              mensajeview="Registro actualizado correctamente!";
                            }else{
                              mensajeview="Registro eliminado correctamente!";
                            }
                            //bootbox.alert(mensajeview);
                            //compras.limpiarcampos();
                            swal(mensajeview, "Clickea para continuar!", "success");
                        }
                    else
                      {
                          waitingDialog.hide();
                          //bootbox.alert("Error! : . " + wmsg);
                          swal({
                            title: "Error!",
                            text: wmsg,
                            type: "warning",
                          });
                      }

                  }
                  else
                    {
                      waitingDialog.hide();
                      //bootbox.alert("Error! : Ocurrio algo inesperado, intente más tarde!");
                      swal({
                        title: "Error!",
                        text: "Ocurrio algo inesperado, intente más tarde!",
                        type: "warning",
                      });
                    }

                    //waitingDialog.hide();
                    //$('#modal-default').modal('hide');
                    //$('#tdatos').trigger( 'reloadGrid' );
  				}
  		  });
  	}

    ,listar:function()
    {
        var wurl="<?php echo base_url('dispositivos/list'); ?>";
        $("#tdatosd").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [

                    { label: 'Ide. Dispositivo', name: 'iddispositivo', key: true, width: 75 },
                    { label: 'Serie', name: 'serie', formatter:'select', width: 75 },
                    { label: 'IMEI', name: 'imei', width: 200 },
              			{ label: 'IdModelo', name: 'idmodelo', width: 200 },
              			{ label: 'Modelo', name: 'modelo', width: 200 },
                    { label: 'Marca', name: 'marca', width: 200 },
              			{ label: 'Nro. SIM', name: 'nrosim', width: 200 },
                    { label: 'IDN', name: 'nroIDN', width: 200 },
                ],
                viewrecords: true,
                height: 250,
                rowNum: 100,
                ShrinkToFit: false,
                shrinkToFit: false,
                rownumbers: true,
                jsonReader: {
                  root: "rows",
                  repeatitems: false
                },
                gridview: true,
                gridComplete: function(){
                    //sucursal.eventload();
                    //dispositivo.eventgrid();
                },
                sortname: 'iddispositivo',
                sortorder: 'desc',
                pager: "#pagerd"
                    });

              $("#tdatosd").jqGrid('navGrid','#pagerd',
              {edit: false, add: false, del: false, search: false, refresh:true},
              {},
              {},
              {},
              {multipleSearch:true, multipleGroup:false, showQuery: true}
              );

              $("#tdatosd").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
              $("#tdatosd").jqGrid('setFrozenColumns');
              $("#tdatosd").jqGrid('hideCol',['idmodelo']);
      }

      ,listaruser:function()
      {
          var wurl="<?php echo base_url('clientes/list'); ?>";
          $("#tdatosc").jqGrid({
                  url: wurl,
                  mtype: "get",
                  styleUI : 'Bootstrap',
                  responsive: true,
                  postData: {'token':$('input[name=token]').val()},
                  datatype: "json",
                  colModel: [
                      { label: 'Ide. Cliente', name: 'IdCliente', width: 75 /*formatter:function (cellvalue, options, rowObject) {
      return "<input type='button' class='btn btn-success btn-xs edit-modal' value='somevalue' onclick='dispositivo.some_function("+rowObject.IdActor+")'\>";
  }*/ },
                      { label: 'Id. Actor', name: 'IdActor', key: true, width: 75 },
                      { label: 'Apellido Paterno', name: 'Apellido_Paterno', width: 75 },
                      { label: 'Apellido Materno', name: 'Apellido_Materno', width: 200 },
  					          { label: 'Nombre', name: 'PrimerNombre', width: 200 },
  					          { label: 'Razon Social', name: 'RazonSocial', width: 100 },
  					          { label: 'Tipo Doc', name: 'TipoDocumento', width: 100 },
                      { label: 'Nro Doc', name: 'CodigoIdentificacion', width: 100 },
                      { label: 'RUC', name: 'RUC', width: 300 },


                  ],
                  viewrecords: true,
                  height: 300,
                  rowNum: 100,
                  ShrinkToFit: false,
                  shrinkToFit: false,
                  rownumbers: true,
                  jsonReader: {
                    root: "rows",
                    repeatitems: false
                  },
                  gridview: true,
                  gridComplete: function(){
                      //sucursal.eventload();
                      //dispositivo.eventgrid();

                  },
                  sortname: 'idcliente',
                  sortorder: 'desc',
                  pager: "#pagerc",
                  });

                $("#tdatosc").jqGrid('navGrid','#pagerc',
                {edit: false, add: false, del: false, search: false, refresh:true},
                {},
                {},
                {},
                {multipleSearch:true, multipleGroup:false, showQuery: true}
                );

                $("#tdatosc").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
                $("#tdatosc").jqGrid('setFrozenColumns');
                $("#tdatosc").jqGrid('hideCol',['IdActor']);
        }

        ,listarorden:function()
        {
            var wurl="<?php echo base_url('ordenes/list'); ?>";
            $("#tdatoso").jqGrid({
                    url: wurl,
                    mtype: "get",
                    styleUI : 'Bootstrap',
                    responsive: true,
                    postData: {'token':$('input[name=token]').val()},
                    datatype: "json",
                    colModel: [
                        { label: 'Id. Orden', name: 'IdOrden',key: true, width: 100 },
                        { label: 'Id. Cliente', name: 'IdCliente', width: 100},
                        { label: 'Cliente', name: 'NomCli', width: 100 },
                        { label: 'Dispositivo', name: 'IdDispositivo', width: 100 },
                        { label: 'Mecanico', name: 'NomMec', width: 100 },
                        { label: 'Empresa', name: 'NombreComercial', width: 100 },
                        { label: 'Taller', name: 'Taller', width: 100 },
                        { label: 'Estado', name: 'EstadoOrden', width: 100 },
                        { label: 'Programacion', name: 'FechaProgramada', width: 100 },
                        { label: 'Ejecucion', name: 'FechaEjecutada', width: 100 },
                    ],
                    viewrecords: true,
                    height: 300,
                    rowNum: 100,
                    ShrinkToFit: false,
                    shrinkToFit: false,
                    rownumbers: true,
                    jsonReader: {
                      root: "rows",
                      repeatitems: false
                    },
                    gridview: true,
                    gridComplete: function(){
                        //sucursal.eventload();
                    },
                    sortname: 'IdOrden',
                    sortorder: 'desc',
                    pager: "#pagero"
                        });

                  $("#tdatoso").jqGrid('navGrid','#pagero',
                  {edit: false, add: false, del: false, search: true, refresh:true},
                  {},
                  {},
                  {},
                  {multipleSearch:true, multipleGroup:false, showQuery: true}
                  );

                  //$("#tdatoso").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
                  $("#tdatoso").jqGrid('setFrozenColumns');
                  $("#tdatoso").jqGrid('hideCol',['IdCliente']);
          }

}

   dispositivo.init();

</script>
