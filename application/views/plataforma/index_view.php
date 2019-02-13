<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span></a>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="contentpanel">
            <?php echo form_hidden('token', $token) ?>
            <!-- CONTENT GOES HERE -->
            <div>
                <table id="tdatos"></table>
                <div id="pager"></div>
            </div>
        </div><!-- contentpanel -->


      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nuevo Comando </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

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
                                  <input type="hidden" name="idcontratou" id="idcontratou">
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
                                          <label>Contrato</label>
                                          <div class="input-group input-group-sm">
                                              <input type="text" id="contratou" class="form-control">
                                              <span class="input-group-btn">
                                                    <button type="button" class="btn btn-info btn-flat contrato-modal" data-toggle="modal">...</button>
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

                  <!-- Modal -->
                  <div class="modal fade" id="myModalCont" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Agregar Contrato</h4>
                              </div>

                              <div class="modal-body">
                                  <!-- form start -->
                                      <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                                      <div>
                                          <table id="tdatoscont"> </table>
                                          <div id="tdatoscont"></div>
                                      </div>
                              </div>

                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <button type="button" class="btn btn-primary btn_addcont">Aceptar</button>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>

                </div>
                <!-- /.box-body -->
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
  var $grid = $("#tdatos"),
      newWidth = $grid.closest(".ui-jqgrid").parent().width();
  $.jgrid.defaults.width = newWidth;
  $.jgrid.defaults.responsive = true;
  $.jgrid.defaults.styleUI = 'Bootstrap';
</script>

<script type="text/javascript">
  dispositivo={
    init:function()
    {
      dispositivo.event();
      dispositivo.validate();
      dispositivo.listar();
    }
    ,event:function()  {}
    ,validate:function(){}
    ,listar:function()
    {
        var wurl="<?php echo base_url('plataforma/list'); ?>";
        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Id. Acceso', name: 'IdAcceso', key: true, width: 50 },
                    { label: 'Id. Cliente', name: 'IdCliente', width: 50 },
                    { label: 'Cliente', name: 'Cliente', width: 150 },
                    { label: 'Acceso App', name: 'FlgAccesoApp', width: 50 },
                    { label: 'Acceso web', name: 'FlgAccesoWeb', width: 100 },
                    { label: 'Conex. Max.', name: 'MaxConexiones', width: 100 },
                    { label: 'Login', name: 'LoginAcceso', width: 100 },
                    { label: 'Acceso', name: 'EstadoAcceso', width: 100 },
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
                sortname: 'IdAcceso',
                sortorder: 'desc',
                pager: "#pager"
                    });

              $("#tdatos").jqGrid('navGrid','#pager',
              {edit: false, add: false, del: false, search: false, refresh:true},
              {},
              {},
              {},
              {multipleSearch:true, multipleGroup:false, showQuery: true}
              );

              $("#tdatos").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
              $("#tdatos").jqGrid('setFrozenColumns');
              $("#tdatos").jqGrid('hideCol',['IdAcceso']);
      }
   }

   dispositivo.init();

</script>
