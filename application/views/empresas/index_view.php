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
        <h4 class="modal-title">Datos de la Empresa</h4>
        <small id="infoemp" class="form-text text-muted">Informacion Basica de la empresa.</small>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

                  <form action="" class="form" method="post" accept-charset="utf-8">
                  <?php echo form_hidden('token', $token) ?>

                  <div class="box-body">
                    <div class="form-group col-sm-4">
                        <label for="ruc" class="control-label">RUC*</label>
                        <input type="text" name="ruc" class="form-control input-sm" id="txtruc" placeholder="escriba su ruc">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="razonsocial" class="control-label">Razon Social*</label>
                        <input type="text" name="razonsocial" class="form-control input-sm" id="txtrazonsocial" placeholder="su razon social">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="nombrecomercial" class="control-label">Nombre Comercial*</label>
                        <input type="text" name="nombrecomercial" class="form-control input-sm" id="txtnombrecomercial" placeholder="escriba su nombre comercial">
                    </div>
                  </div>


                    <div class="box border-top-solid">

                      <div class="box-body my-form-body col-sm-6">

                        <div class="modal-header">
                          <h4 class="modal-title">Ubicaciones y Referencias</h4>
                          <small id="infoemp" class="form-text text-muted">Informacion de direccion, ubigeo, teléfonos.</small>
                        </div>

                            <div class="form-group">
                              <label for="direccion" class="col-sm-3 control-label">Direccion*</label>
                              <div class="col-sm-9">
                                <input type="text" name="direccion" class="form-control input-sm" id="txtdireccion" placeholder="escriba su direccion">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <label for="ubigeo" class="col-sm-3 control-label">Ubigeo*</label>
                              <div class="col-sm-9">
                                <input type="text" name="ubigeo" class="form-control input-sm" id="txtubigeo" placeholder="">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <label for="ubigeo" class="col-sm-3 control-label">tel/Cel*</label>
                              <div class="col-sm-4">
                                <input type="text" name="tel" class="form-control input-sm" id="txttel" placeholder="">
                              </div>
                              <div class="col-sm-5">
                                <input type="text" name="cel" class="form-control input-sm" id="txtcel" placeholder="">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <label for="repre" class="col-sm-3 control-label">Representante*</label>
                              <div class="col-sm-9">
                                <input type="text" name="repre" class="form-control input-sm" id="txtrepre" placeholder="">
                              </div>
                            </div>

                      </div>

                      <div class="box-body my-form-body col-sm-6">
                        <div class="modal-header">
                          <h4 class="modal-title">Logo</h4>
                          <small id="infolog" class="form-text text-muted">La imagen debe de ser de 500x500 pixeles en formato png o jpg.</small>
                        </div>
                        <div class="form-group">
                            <div class="file-field big">
                              <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                                  <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                  <input type="file" id="uploadImage" onchange="PreviewImage()" multiple>
                              </a>
                              <div class="form-group col-sm-12">
                                <img src="#" alt="your image" id="uploadPreview" height="200" width="auto">
                              </div>

                            </div>
                        </div>

                      </div>
                      <!-- /.box-body -->
                  </div>

                  </form>
                </div>


            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
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

    $( "#btnguardar" ).on( "click", function() {
      dispositivo.guardar();
    });

    }
    ,event:function()  {}
    ,validate:function(){}
    ,guardar:function()
      {
      var wurl="<?php echo base_url('empresas/guardar'); ?>";

      $.ajax({
        async: true,
        url: wurl,
        type: "post",
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        data://$("#frm-clientes").serialize(),
        {
          'IdEmpresa':$("#txtIdVehiculo").val()
        , 'RUC':$("#txtPlaca").val()
        , 'RazonSocial':$("#txtchasis").val()
        , 'NombreComercial':$("#txtMotor").val()
        , 'Representante':$("#txtModelo").val()


        },
        beforeSend: function(data){

        },
        complete: function(data, status){
          alert('completado');
        }
      });
    }

    ,listar:function()
    {
        var wurl="<?php echo base_url('empresas/list'); ?>";

        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Ide. Empresa', name: 'IdEmpresa', key: true, width: 75 },
                    { label: 'RUC', name: 'RUC', width: 100 },
                    { label: 'Razon Social', name: 'RazonSocial', width: 200 },
              			{ label: 'NombreComercial', name: 'NombreComercial', width: 300 },
              			{ label: 'Representante', name: 'Representante', width: 300 },
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
                sortname: 'IdEmpresa',
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
              $("#tdatos").jqGrid('hideCol',['idmodelo']);

            }
          }

 dispositivo.init();

</script>

 <script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
