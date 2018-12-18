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
        <h4 class="modal-title">Nuevo Vehiculo</h4>
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

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="placa" class="control-label">Placa</label>
                        <input type="text" name="placa" class="form-control" id="txtplaca" placeholder="Ingrese la placa">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="chasis" class="control-label">Chasis</label>
                        <input type="text" name="chasis" class="form-control" id="txtchasis" placeholder="escriba el chasis">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="motor" class="control-label">Motor</label>
                        <input type="text" name="motor" class="form-control" id="txtmotor" placeholder="escriba la serie del motor">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="modelo" class="control-label">Modelo</label>
                        <input type="text" name="modelo" class="form-control" id="txtmodelo" placeholder="escriba el modelo">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="color" class="control-label">Color</label>
                        <input type="text" name="color" class="form-control" id="txtcolor" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="empresa" class="control-label">Empresa</label>
                        <select name="empresa" id="empresa" class="form-control">
                          <?php
                              foreach ($empresas as $row) {
                                  echo '<option value="'.$row->IdEmpresa.'">'.$row->NombreComercial.'</option>';
                              }

                           ?>
                      </select>
                      </div>
                    </div>

                  </form>
                </div>
                <!-- /.box-body -->
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnguardar" name="btnguardar" class="btn btn-primary">Save changes</button>
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
    ,guardar:function(){

      var wurl="<?php echo base_url('vehiculos/guardar'); ?>";

		  $.ajax({
				async: true,
				url: wurl,
				type: "post",
				dataType: 'json',
				contentType: 'application/x-www-form-urlencoded',
				data://$("#frm-clientes").serialize(),
				{
					'placacampo':$("#txtplaca").val()
				,	'chasiscampo':$("#txtchasis").val()
        , 'motorcampo':$("#txtmotor").val()
        , 'modelocampo':$("#txtmodelo").val()
        , 'colorcampo':$("#txtcolor").val()
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
        var wurl="<?php echo base_url('vehiculos/list'); ?>";
        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Ide. Vehiculo', name: 'IdVehiculo', key: true, width: 75 },
                    { label: 'Placa', name: 'Placa', key: true, width: 75 },
                    { label: 'Chasis', name: 'Chasis', width: 200 },
                    { label: 'Motor', name: 'Motor', width: 200 },
              			{ label: 'Modelo', name: 'Modelo', width: 200 },
              			{ label: 'Color', name: 'Color', width: 100 },
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
                sortname: 'idvehiculo',
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
