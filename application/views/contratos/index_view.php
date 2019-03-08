<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper barra">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <a class="btn btn-primary btn-xs new-modal" data-toggle="modal" id="btnNuevo"><span class="fa fa-plus"></span></a>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Procesos</a></li>
      <li class="active">Contrato</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <input type="hidden" name="txttipm" id="txttipm" value="">
    <input type="hidden" name="idcontrato" id="idcontrato" value="">
    <input type="hidden" name="stdcontrato" id="stdcontrato" value="">
    <!-- Default box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Listado</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="mainpanel">

        <div class="contentpanel">
            <?php echo form_hidden('token', $token) ?>
            <!-- CONTENT GOES HERE -->
            <div>
                <table id="tdatos"> </table>
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

<script type="text/javascript">
  var $grid = $("#tdatos"),
      newWidth = $grid.closest(".ui-jqgrid").parent().width();

  $.jgrid.defaults.width = newWidth;
  $.jgrid.defaults.responsive = true;
  $.jgrid.defaults.styleUI = 'Bootstrap';

</script>

<script type="text/javascript">
  var idgrilla="#tdatos";
  dispositivo={
    init:function()
    {
      dispositivo.eventgrid();
      dispositivo.validate();
      dispositivo.listar();
      $("#btnNuevo").click(function(){
        window.location = "contratos/create";
      });
    }
    ,eventgrid:function()
    {

      $(".print-modal").click(function(event)
        {
          event.returnValue = false; /*para I.E.*/
          if(event.preventDefault) event.preventDefault();
            $("#txttipm").val('P');
            var idrow=$(this).data('id');
            $("#tdatos").jqGrid('setSelection',idrow, false);
            var selr = $("#tdatos").jqGrid('getGridParam', 'selrow');
            var rowData = $("#tdatos").jqGrid('getRowData', selr)

            $("#idcontrato").val(idrow);
            //alert(idrow);

            swal({
              title: "Proceso/Contrato",
              text: "¿Imprimir Contrato?",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Si, Imprimir!",
              closeOnConfirm: true,
              showLoaderOnConfirm: true
            },
            function (result) {
                if (result){
                  window.open('<?php echo base_url(); ?>Contratos/impresion?idcontrato=' + $("#idcontrato").val(),'_blank');
                }

            }
          );

        });

        $(".delete-modal").click(function(event)
          {
              event.returnValue = false; /*para I.E.*/
              if(event.preventDefault) event.preventDefault();

              $("#txttipm").val('D');
              var idrow=$(this).data('id');
              $("#tdatos").jqGrid('setSelection',idrow, false);
              var selr = $("#tdatos").jqGrid('getGridParam', 'selrow');
              var rowData = $("#tdatos").jqGrid('getRowData', selr)

              $("#idcontrato").val(rowData.IdContrato);
              $("#stdcontrato").val('005012');
              //alert(rowData.IdContrato);

              swal({
                title: "Procesos/Contrato",
                text: "¿Esta seguro que desea anular este contrato?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Si, Anular!",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
              },
              function (result) {
                  if (result)
                  dispositivo.guardarcontrato();
                  $('#tdatos').trigger('reloadGrid');
              }
            );
          });
    }
    ,validate:function(){}
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
            'opcion1':$("#txttipm").val()
            ,'idcontrato':$("#idcontrato").val()
            ,'servicio':$("#servicio").val()
            ,'idcliente':$("#idclientec").val()
            ,'tipcontrato':$("#tipcontrato").val()
            ,'idempresa':$("#idempresa").val()
            ,'idvehiculo':$("#idvehiculoc").val()
            ,'stdcontrato':$("#stdcontrato").val()
            ,'idord':$("#idord").val()
            ,'cadenadetalleanex':$("#cadenadetalleanex").val()
          },

  				beforeSend: function(data){
            waitingDialog.show('Procesando...', {dialogSize: 'sm'});
  				},
  				complete: function(data, status){

            if (status=="success"){

                var werror=JSON.parse(data.responseText).error;
                var wmsg=JSON.parse(data.responseText).mensaje;
                  if (werror==0)
                        {
                            var wcodigo=JSON.parse(data.responseText).id;
                            var mensajeview=""
                            waitingDialog.hide();
                            if ($("#txttipmcon").val()=="N")
                            {
                              mensajeview="Registro Exitoso!";
                            }else if($("#txttipmcon").val()=="U"){
                              mensajeview="Registro actualizado correctamente!";
                            }else{
                              mensajeview="Registro eliminado correctamente!";
                            }
                            swal(mensajeview, "Clickea para continuar!", "success");
                        }
                    else
                      {
                          waitingDialog.hide();
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
                      swal({
                        title: "Error!",
                        text: "Ocurrio algo inesperado, intente más tarde!",
                        type: "warning",
                      });
                    }
  				}
  		  });
  	}
    ,listar:function()
    {
        var wurl="<?php echo base_url('contratos/list'); ?>";
        $(idgrilla).jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" data-id=' + rowObject.IdContrato + '><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" id="delete-modal" data-id=' + rowObject.IdContrato + '><span class="fa fa-trash-o"></span></button> <button class="btn btn-primary btn-xs print-modal" data-id=' + rowObject.IdContrato + '><span class="fa fa-file-pdf-o"></span></button>';}},
                    { label: 'Ide. ContratoOrdenes', name: 'IdContratoOrdenes', width: 100 },
                    { label: 'COD', name: 'IdContrato', key:true, width: 60 },
                    { label: 'Ide. Orden', name: 'IdOrden', width: 100 },
              			{ label: 'Tipo Contrato', name: 'CodTipoContrato', width: 100 },
                    { label: 'Ide. Cliente', name: 'IdCliente', width: 200 },
              			{ label: 'CLIENTE', name: 'NomCli', width: 200 },
                    { label: 'IdEmpresa', name: 'IdEmpresa', width: 200 },
                    { label: 'EMPRESA', name: 'RazonSocial', width: 200 },
                    { label: 'Ide. Vehiculo', name: 'IdVehiculo', width: 100 },
              			{ label: 'VEHÍCULO', name: 'chasis', width: 150 },
                    { label: 'ESTADO', name: 'EstadoContrato', width: 100 },
                    { label: 'FECHA INICIO', name: 'FechaInicio', width: 150 },
                    { label: 'FECHA FIN', name: 'FechaFin', width: 150 }
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
                sortname: 'IdContratoOrdenes',
                sortorder: 'desc',
                pager: "#pager",
                gridComplete: function(){
                    //sucursal.eventload();
                    dispositivo.eventgrid();
                }
                    });

              $(idgrilla).jqGrid('navGrid','#pager',
              {edit: false, add: false, del: false, search: false, refresh:true},
              {},
              {},
              {},
              {multipleSearch:true, multipleGroup:false, showQuery: true}
              );

              $(idgrilla).jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
              $(idgrilla).jqGrid('setFrozenColumns');
              $(idgrilla).jqGrid('hideCol',['IdContratoOrdenes','IdOrden', 'IdCliente', 'IdEmpresa','IdVehiculo']);
      }
   }

   dispositivo.init();

</script>
