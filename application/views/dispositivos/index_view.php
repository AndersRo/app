<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <a class="btn btn-danger btn-sm new-modal" data-toggle="modal" id="btnNuevo"><span class="fa fa-map-marker"></span></a>
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

                  <div class="form-group" hidden>
                    <label for="txttipm" class="col-sm-2 control-label">Tipo Mant</label>

                    <div class="col-sm-4">
                      <input type="text" name="txttipm" class="form-control" id="txttipm" placeholder="">
                    </div>
                  </div>

                  <div class="form-group" hidden>
                    <label for="iddispositivo" class="col-sm-2 control-label">Id Dispositivo</label>

                    <div class="col-sm-4">
                      <input type="text" name="iddispositivo" class="form-control" id="iddispositivo" placeholder="">
                    </div>
                  </div>

                    <div class="form-group">
                      <label for="serie" class="col-sm-2 control-label">Serie</label>
                      <div class="col-sm-4">
                        <input type="text" name="serie" class="form-control" id="txtserie" placeholder="escriba la serie">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="imei" class="col-sm-2 control-label">IMEI</label>
                      <div class="col-sm-4">
                        <input type="text" name="imei" class="form-control" id="txtimei" placeholder="IMEI del dispositivo">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="role" class="col-sm-2 control-label">Modelo</label>
                      <div class="col-sm-4" hi>

                        <select name="modelo" id="txtmodelo" class="form-control selectpicker" data-live-search="true">
                          <?php
                              foreach ($modelos as $row) {
                                  echo '<option value="'.$row->IdModelo.'">'.$row->Descripcion.'</option>';
                              }

                           ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="sim" class="col-sm-2 control-label">Sim</label>
                      <div class="col-sm-4">
                        <input type="text" name="sim" class="form-control" id="txtsim" placeholder="ingrese numero de Sim">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="idn" class="col-sm-2 control-label">Nro. IDN</label>
                      <div class="col-sm-4">
                        <input type="text" name="idn" class="form-control" id="txtidn" placeholder="escriba la IDN">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="role" class="col-sm-2 control-label">Empresa</label>
                      <div class="col-sm-4">

                        <select name="empresa" id="txtempresa" class="form-control" disabled>
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

  $("#btnNuevo").click(function(){
    $("#txttipm").val('N');
    $("#iddispositivo").val(0)
    $('#modal-default').modal('show');
  });
</script>

<script type="text/javascript">
  dispositivo={
    init:function()
    {
      dispositivo.eventgrid();
      dispositivo.validate();
      dispositivo.listar();
      $( "#btnguardar" ).on( "click", function() {
  		dispositivo.guardar();
  		});
    }
    ,eventgrid:function() {

      $(".delete-modal").click(function(event)
              {
                  event.returnValue = false; /*para I.E.*/
                  if(event.preventDefault) event.preventDefault();

                  $("#txttipm").val('D');
                  var idrow=$(this).data('id');
                  $("#tdatos").jqGrid('setSelection',idrow, false);
                  var selr = $("#tdatos").jqGrid('getGridParam', 'selrow');
                  var rowData = $("#tdatos").jqGrid('getRowData', selr)

                  //console.log(rowData);
                  //alert(rowData.IdModelo);
                  //Cargando los Tipos
                  $("#iddispositivo").val(rowData.iddispositivo);
                  //$("#txtmodelo").val(rowData.IdCategoria).trigger('change');
                  //$("#txtmarca").val(rowData.CodigoReferencia);
                  //$("#fileimg").val(rowData.CodigoTipo).trigger('change');

                  swal({
                    title: "Mantenimiento/Dispositivo",
                    text: "¿Esta seguro de Eliminar este registro?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si, borralo!",
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                  },
                  function (result) {
                      if (result)
                      dispositivo.guardar();
                      //swal("Eliminado!", "Su registro ha sido eliminado!", "success");
                          //producto.setproductos($("#frm-registro"));
                  }
                  );
              });
    }
    ,validate:function(){}
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

                //  alert( json[0].Apellido_Paterno );

                $("#iddispositivo").val( json[0].IdDispositivo );
                $("#txtserie").val( json[0].Serie );
                $("#txtimei").val( json[0].Imei );
                $("#txtmodelo").val( json[0].IdModelo );
                $("#txtsim").val( json[0].NroSim );
                $("#txtidn").val( json[0].NroIDN );
                $("#txtempresa").val( json[0].IdEmpresa );
              //var yourData = json.Data; // or json["Data"]
                    //alert(JSON.stringify(data.responseText));
                    /*$.each(json[0], function(i, item) {
                        alert(item);
                    });
                    */
              }
          });

      //alert(strA_valor);
        $("#txttipm").val('U');
        $('#modal-default').modal('show');
    }
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
          'opcion':$("#txttipm").val()
        , 'iddispositivo':$("#iddispositivo").val()
				,	'seriecampo':$("#txtserie").val()
				,	'imeicampo':$("#txtimei").val()
        , 'modelocampo':$("#txtmodelo").val()
        , 'simcampo':$("#txtsim").val()
        , 'idncampo':$("#txtidn").val()
        , 'empresacampo':$("#txtempresa").val()
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
          $('#modal-default').modal('hide');
          $('#tdatos').trigger( 'reloadGrid' );
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
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" onclick="dispositivo.some_function('+rowObject.iddispositivo+')"><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.iddispositivo + '><span class="fa fa-trash-o"></span></button>';}},
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
                    dispositivo.eventgrid();
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
