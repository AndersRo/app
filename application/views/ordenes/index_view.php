<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <a class="btn btn-primary btn-xs new-modal" id="btnNuevo" data-toggle="modal"><span class="fa fa-plus"></span></a>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Procesos</a></li>
      <li class="active">Ordenes</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
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

<div class="modal fade" id="modal-ordenfin">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Terminar Orden </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

                  <form action="" class="form-ordfin" method="post" accept-charset="utf-8">
                  <?php echo form_hidden('token', $token) ?>

                  <div class="form-group" hidden>
                    <label for="txttipm" class="col-sm-12 control-label">Tipo Proceso</label>

                    <div class="col-sm">
                      <input type="text" name="txttipm" class="form-control" id="txttipm" placeholder="">
                    </div>
                  </div>

                    <div class="form-group">
                      <label for="idorden" class="col-sm-12 control-label">Orden Nº <span> <label id="ordid"></label> </span> </label>

                      <div class="col-sm">
                        <input type="text" name="idorden" class="form-control" id="idorden" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="idcliente" class="col-sm-12 control-label">Cliente</label>

                      <div class="col-sm">
                        <input type="text" name="idcliente" class="form-control" id="idcliente" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="idmecanico" class="col-sm-12 control-label">Mecanico</label>

                      <div class="col-sm">
                        <input type="text" name="idmecanico" class="form-control" id="idmecanico" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="idempresa" class="col-sm-12 control-label">Empresa</label>

                      <div class="col-sm">
                        <input type="text" name="idempresa" class="form-control" id="idempresa" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="idtaller" class="col-sm-12 control-label">Taller</label>

                      <div class="col-sm">
                        <input type="text" name="idtaller" class="form-control" id="idtaller" readonly>
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
        <button type="button" class="btn btn-primary" id="btnfinord">Teminar Orden</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-ordenfindet" tabindex="-2">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detalle Orden </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

                  <form action="" class="form-ordfindet" method="post" accept-charset="utf-8">
                  <?php echo form_hidden('token', $token) ?>

                  <div class="form-group" hidden>
                    <label for="txttipmdet" class="col-sm-12 control-label">Tipo Proceso</label>

                    <div class="col-sm-12">
                      <input type="text" name="txttipmdet" class="form-control" id="txttipmdet">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-6">
                      <label for="idordendet" class="col-sm-12 control-label">Detalle Nº</label>

                      <div class="col-sm-12">
                        <input type="text" name="idordendet" class="form-control" id="idordendet" readonly>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <label for="tipotrabajo" class="col-sm-12 control-label">Tipo de Trabajo</label>

                      <div class="col-sm-12">
                        <input type="text" name="tipotrabajo" class="form-control" id="tipotrabajo" readonly>
                      </div>
                    </div>
                  </div>

                    <div class="form-group">

                      <div class="col-sm-6">
                          <label for="cliente" class="col-sm-12 control-label">Cliente</label>

                          <div class="col-sm-12">
                            <input type="text" name="cliente" class="form-control" id="cliente" readonly>
                          </div>
                      </div>

                      <div class="col-sm-6">
                          <label for="mecanico" class="col-sm-12 control-label">Mecanico</label>

                          <div class="col-sm-12">
                            <input type="text" name="mecanico" class="form-control" id="mecanico" readonly>
                          </div>
                      </div>

                    </div>

                    <div class="form-group">
                      <div class="col-sm-6">
                        <label for="iddispositivo" class="col-sm-12 control-label">Dispositivo</label>

                        <div class="col-sm-12">
                          <input type="text" name="iddispositivo" class="form-control" id="iddispositivo" readonly>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <label for="dispositivo" class="col-sm-12 control-label">Serie</label>

                        <div class="col-sm-12">
                          <input type="text" name="dispositivo" class="form-control" id="dispositivo" readonly>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <label for="nrosim" class="col-sm-12 control-label">SIM</label>

                        <div class="col-sm-12">
                          <input type="text" name="nrosim" class="form-control" id="nrosim" readonly>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <label for="nroidn" class="col-sm-12 control-label">IDN</label>

                        <div class="col-sm-12">
                          <input type="text" name="nroidn" class="form-control" id="nroidn" readonly>
                        </div>
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
        <button type="button" class="btn btn-default"  data-dismiss="modal" data-toggle="modal" data-target="#myModaldetalle">Volver</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- Modal -->
    <div class="modal fade" id="myModaldetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detalles</h4>
                </div>

                <div class="modal-body">
                    <!-- form start -->
                        <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                        <!--<input type="text" name="lol" id="lol" value="">-->
                        <div>
                            <table id="tdatosdet"> </table>
                            <div id="pagerdet"></div>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary btn_savehorarios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
  var $grid = $("#tdatos"),
      newWidth = $grid.closest(".ui-jqgrid").parent().width();
  $.jgrid.defaults.width = newWidth;
  $.jgrid.defaults.responsive = true;
  $.jgrid.defaults.styleUI = 'Bootstrap';

  $("#btnNuevo").click(function(){
    //$("#txttipm").val('N');
    //$("#txtcli").val('C');
    //$("#idorden").val(0)
    window.location = "ordenes/create";
  });

  $("#btnfinord").click(function(){
    dispositivo.guardar();
    $('#tdatos').trigger('reloadGrid');
    $('#modal-ordenfin').modal('hide');
  });
</script>

<script type="text/javascript">
  var $gridet = $("#tdatosdet"),
      newWidth = $gridet.closest(".ui-jqgrid").parent().width();
  $.jgrid.defaults.width = newWidth;
  $.jgrid.defaults.responsive = true;
  $.jgrid.defaults.styleUI = 'Bootstrap';

</script>


<script type="text/javascript">
  dispositivo={
    init:function()
    {
      dispositivo.eventgrid();
      dispositivo.validate();
      dispositivo.listar();
      dispositivo.listardetalle();



    }
    ,eventgrid:function(){
      $(".detalle-modal").click(function(event) {

        event.returnValue = false; /*para I.E.*/
        if(event.preventDefault) event.preventDefault();
        //Obteniendo Id
          var idtle = $(this).data('id');
          //alert(idtle);
          //Volviendo a pasar los parametros de busqueda
          var myfilter = { groupOp: "AND", rules: []};
          myfilter.rules.push({field:"IdOrden",op:"bw",data:idtle});
          $('#tdatosdet').jqGrid('setGridParam', {search: true
              , postData: {
               'filters': JSON.stringify(myfilter)
                          }
                        }
                    );

        $('#tdatosdet').trigger('reloadGrid');
        $('#myModaldetalle').modal('show');
      });

      $(".anular-orden").click(function(event) {

        event.returnValue = false; /*para I.E.*/
        if(event.preventDefault) event.preventDefault();
          $("#txttipm").val('D');
        //Obteniendo Id
          var idtle = $(this).data('id');

          $("#idorden").val(idtle);
          //$("#txtmodelo").val(rowData.IdCategoria).trigger('change');
          //$("#txtmarca").val(rowData.CodigoReferencia);
          //$("#fileimg").val(rowData.CodigoTipo).trigger('change');

          swal({
            title: "Mantenimiento/Cliente",
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
              $('#tdatos').trigger('reloadGrid');
              //swal("Eliminado!", "Su registro ha sido eliminado!", "success");
                  //producto.setproductos($("#frm-registro"));
          }

          );

        //$('#tdatos').trigger('reloadGrid');
        //$('#myModaldetalle').modal('hide');
      });

      $(".print-modal").click(function(event)
        {
          event.returnValue = false; /*para I.E.*/
          if(event.preventDefault) event.preventDefault();
            var idrow=$(this).data('id');
            $("#tdatos").jqGrid('setSelection',idrow, false);
            var selr = $("#tdatos").jqGrid('getGridParam', 'selrow');
            var rowData = $("#tdatos").jqGrid('getRowData', selr)

            $("#idorden").val(idrow);
            //alert(idrow);

            swal({
              title: "Proceso/Orden",
              text: "¿Imprimir Orden?",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Si, Imprimir!",
              closeOnConfirm: true,
              showLoaderOnConfirm: true
            },
            function (result) {
                if (result){
                  window.open('<?php echo base_url(); ?>Ordenes/impresion?idorden=' + $("#idorden").val(),'_blank');
                }

            }
          );

        });
    }
    ,validate:function(){}

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
            ,'idatepicker':$("#idatepicker").val()
            ,'idtaller':$("#idtaller").val()
            ,'cadenadetalle':$("#cadenadetalle").val()
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
                            }else if($("#txttipm").val()=="E"){
                              mensajeview="Orden Terminada Exitosamente!";
                            }
                            else{
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
    ,ejecutar_detalle:function(strA_valor)
    {
          var wurl="<?php echo base_url('ordenes/detordenid'); ?>";

          $.ajax({
            async: true,
            url: wurl,
            type: "post",
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data://$("#frm-clientes").serialize(),
            {
              'idordendetalle':strA_valor
            },
            beforeSend: function(data){

            },
            complete: function(data, status){

              var json = JSON.parse(data.responseText);

                //$("#ordiddet").text(json[0].IdOrdenDetalle);
                $("#idordendet").val( json[0].IdOrdenDetalle );
                $("#iddispositivo").val( json[0].IdDispositivo );
                $("#cliente").val( json[0].Cliente );
                $("#mecanico").val( json[0].Mecanico );
                $("#dispositivo").val( json[0].Serie );
                $("#nrosim").val( json[0].NroSim );
                $("#nroidn").val( json[0].NroIDN );
                $("#tipotrabajo").val( json[0].TipoTrabajo );
              }
          });
        $("#txttipmdet").val('X');
        $("#myModaldetalle").modal('hide');
        $('#modal-ordenfindet').modal('show');
    }
    //obtener una pequeña informacon de las ordenes
    ,some_function:function(strA_valor)
    {
          var wurl="<?php echo base_url('ordenes/listidorden'); ?>";

          $.ajax({
            async: true,
            url: wurl,
            type: "post",
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data://$("#frm-clientes").serialize(),
            {
              'idorden':strA_valor
            },
            beforeSend: function(data){

            },
            complete: function(data, status){

              var json = JSON.parse(data.responseText);

                //  alert( json[0].Apellido_Paterno );

                $("#ordid").text(json[0].IdOrden);
                $("#idorden").val( json[0].IdOrden );
                $("#idcliente").val( json[0].NomCli );
                $("#idmecanico").val( json[0].NomMec );
                $("#idempresa").val( json[0].NombreComercial );
                $("#idtaller").val( json[0].Taller );

              //var yourData = json.Data; // or json["Data"]
                    //alert(JSON.stringify(data.responseText));
                    /*$.each(json[0], function(i, item) {
                        alert(item);
                    });
                    */
              }
          });

      //alert(strA_valor);
        $("#txttipm").val('E');
        $('#modal-ordenfin').modal('show');
    }
    ,listardetalle:function(){
                  //var idtle = $(this).data('id');
                    //'datito':(rowData.IdOrden);
                  //var datord = (rowData.IdOrden);
                  //$("#lol").val(idtle);
                  var wurl="<?php echo base_url('ordenes/listdet'); ?>";
                    //console.log(idtle);
                      $("#tdatosdet").jqGrid({
                              async: true,
                              url: wurl,
                              mtype: "GET",
                              styleUI : 'Bootstrap',
                              responsive: true,
                              datatype: "json",
                              colModel: [
                                  { label: '...', name: 'accion' , width: 110, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-primary btn-xs fin-detalle" onclick="dispositivo.ejecutar_detalle('+rowObject.IdOrdenDetalle+')"><span class="fa fa-check-circle"></span></button>';}},
                                  { label: 'Id. Orden', name: 'IdOrden', width: 100 },
                                  { label: 'Id. Detalle', name: 'IdOrdenDetalle',key: true, width: 100 },
                                  //{ label: 'Id. Empresa', name: 'IdEmpresa', width: 100 },
                                  { label: 'Empresa', name: 'NombreComercial', width: 100 },
                                  //{ label: 'Id. Mecanico', name: 'IdMecanico', width: 100 },
                                  { label: 'Mecanico', name: 'Mecanico', width: 100 },
                                  //{ label: 'Id. Cliente', name: 'IdCliente', width: 100 },
                                  { label: 'Cliente', name: 'Cliente', width: 100 },
                                  //{ label: 'Id. Vehiculo', name: 'IdVehiculo', width: 100 },
                                  { label: 'Vehiculo', name: 'Vehiculo', width: 100 },
                                  //{ label: 'Id. Taller', name: 'IdTaller', width: 100 },
                                  { label: 'Taller', name: 'Taller', width: 100 },
                                  //{ label: 'COD', name: 'CodOrd', width: 100 },
                                  { label: 'Estado', name: 'EstadoOrden', width: 100 },
                                  { label: 'Observacion', name: 'Obsvacion', width: 100 },
                                  { label: 'FechaProgramada', name: 'FechaProgramada', width: 100 },
                                  { label: 'FechaEjecutada', name: 'FechaEjecutada', width: 100 },
                                  { label: 'Dispositivo', name: 'Serie', width: 100 },
                                  //{ label: 'Id. Trabajo', name: 'CodTipoTrabajo', width: 100 },
                                  { label: 'Trabajo', name: 'TipoTrabajo', width: 100 },
                                  { label: 'Sim', name: 'NroSim', width: 100 },
                                  { label: 'IDN', name: 'NroIDN', width: 100 },
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
                              sortname: 'IdOrden',
                              sortorder: 'desc',
                              pager: "#pagerdet",

                                  });

                            $("#tdatosdet").jqGrid('navGrid','#pagerdet',
                            {edit: false, add: false, del: false, search: false, refresh:true},
                            {},
                            {},
                            {},
                            {multipleSearch:true, multipleGroup:false, showQuery: true}
                            );

                            //$("#tdatosdet").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
                            $("#tdatosdet").jqGrid('setFrozenColumns');
                            $("#tdatosdet").jqGrid('hideCol',['IdOrden']);
    }
    ,listar:function()
    {
        var wurl="<?php echo base_url('ordenes/list'); ?>";
        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 110, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-danger btn-xs anular-orden" data-id=' + rowObject.IdOrden + '><span class="fa fa-trash-o"></span></button> <button class="btn btn-primary btn-xs fin-modal" onclick="dispositivo.some_function('+rowObject.IdOrden+')"><span class="fa fa-check-circle"></span></button> <button class="btn btn-success btn-xs detalle-modal" id="detalle-modal" data-id=' + rowObject.IdOrden + '><span class="fa fa-eye"></span></button> <button class="btn btn-primary btn-xs print-modal" data-id=' + rowObject.IdOrden + '><span class="fa fa-file-pdf-o"></span></button>';}},
                    { label: 'Id. Orden', name: 'IdOrden',key: true, width: 60 },
                    { label: 'Cliente', name: 'NomCli', width: 100 },
                    //{ label: 'Dispositivo', name: 'IdDispositivo', width: 100 },
                    { label: 'Mecanico', name: 'NomMec', width: 100 },
                    { label: 'Empresa', name: 'NombreComercial', width: 100 },
                    { label: 'Taller', name: 'Taller', width: 100 },
                    //{ label: 'Estado', name: 'EstadoOrden', width: 100 },
                    { label: 'Estado', name: 'Descripcion', width: 100 },
                    { label: 'Programacion', name: 'FechaProgramada', width: 120 },
                    { label: 'Ejecucion', name: 'FechaEjecutada', width: 120 },
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
                    dispositivo.eventgrid();
                },
                sortname: 'IdOrden',
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
