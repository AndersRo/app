<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <a class="btn btn-danger btn-sm new-modal" data-toggle="modal" data-target="#modal-default"><span class="fa fa-map-marker"></span></a>
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
        <h4 class="modal-title">Nuevo Dispositivo</h4>
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
                      <label for="serie" class="col-sm-1 control-label">Serie</label>
                      <div class="col-sm-5">
                        <input type="text" name="serie" class="form-control" id="txtserie" placeholder="escriba la serie">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="imei" class="control-label">IMEI</label>
                      <div class="col-sm-5">
                        <input type="text" name="imei" class="form-control" id="txtimei" placeholder="IMEI del dispositivo">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="role" class="col-sm-1 control-label">Modelo</label>
                      <div class="col-sm-5" hi>

                        <select name="modelo" id="txtmodelo" class="form-control">
                          <?php
                              foreach ($modelos as $row) {
                                  echo '<option value="'.$row->IdModelo.'">'.$row->Descripcion.'</option>';
                              }

                           ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="sim" class="control-label">Sim</label>
                      <div class="col-sm-5">
                        <input type="text" name="sim" class="form-control" id="txtsim" placeholder="ingrese numero de Sim">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="idn" class="col-sm-1 control-label">Nro. IDN</label>
                      <div class="col-sm-5">
                        <input type="text" name="idn" class="form-control" id="txtidn" placeholder="escriba la IDN">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="role" class="control-label">Empresa</label>
                      <div class="col-sm-5">

                        <select name="empresa" id="txtempresa" class="form-control">
                          <?php
                              foreach ($empresas as $row) {
                                  echo '<option value="'.$row->IdEmpresa.'">'.$row->NombreComercial.'</option>';
                              }

                           ?>
                      </select>
                      </div>
                    </div>
                    <input type="text" name="option" value="N" id="option1" hidden>

                  </form>
                </div>
                <!-- /.box-body -->
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" name="btnguardar" id="btnguardar">Guardar</button>
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

      var wurl="<?php echo base_url('dispositivos/store'); ?>";

		  $.ajax({
				async: true,
				url: wurl,
				type: "post",
				dataType: 'json',
				contentType: 'application/x-www-form-urlencoded',
				data://$("#frm-clientes").serialize(),
				{
          'opcion':$("#option1").val()
				,	'seriecampo':$("#txtserie").val()
				,	'imeicampo':$("#txtimei").val()
        , 'modelocampo':$("#txtmodelo").val()
        , 'simcampo':$("#txtsim").val()
        , 'idncampo':$("#txtidn").val()
        , 'empresacampo':$("#txtempresa").val()
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
        var wurl="<?php echo base_url('dispositivos/list'); ?>";
        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Ide. Dispositivo', name: 'iddispositivo', key: true, width: 75 },
                    { label: 'Serie', name: 'serie', width: 75 },
                    { label: 'IMEI', name: 'imei', width: 200 },
              			{ label: 'IdModelo', name: 'idmodelo', width: 200 },
              			{ label: 'Modelo', name: 'modelo', width: 200 },
                    { label: 'Marca', name: 'marca', width: 200 },
              			{ label: 'Nro. SIM', name: 'nrosim', width: 200 },
                    { label: 'IDN', name: 'nroIDN', width: 200 },
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
                sortname: 'iddispositivo',
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
