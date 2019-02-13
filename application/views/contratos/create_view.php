<div class="content-wrapper" style="min-height: 973px; padding: 15px;">

  <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->

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
                            <!--<div class="box-tools pull-right">
                              <button type="button" class="btn btn-default btn_save"><i class="fa fa-save"></i> Guardar Contrato </button>
                            </div>-->
                          </div>

                          <div class="box-body">

                            <form action="" class="form-horizontal" id="frm-contratos" method="post" accept-charset="utf-8">
                            <?php echo form_hidden('token', $token) ?>

                            <div class="row">
                              <div class="col-sm-6">

                                  <input type="hidden" name="cadenadetalleanex" class="form-control" id="cadenadetalleanex">
                                  <input type="hidden" name="idord" class="form-control" id="idord">

                                <div class="form-group" hidden>
                                  <label for="txttipmcon" class="col-sm-2 control-label">Tipo Mant</label>

                                  <div class="col-sm-10">
                                    <input type="text" name="txttipmcon" class="form-control" id="txttipmcon" placeholder="">
                                  </div>
                                </div>

                                <div class="form-group" hidden>
                                  <label for="idordencon" class="col-sm-2 control-label">Cont. Nro.</label>

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
                                  <label for="role" class="col-sm-2 control-label">Estado</label>

                                  <div class="col-sm-10">
                                    <select name="stdcontrato" id="stdcontrato" class="form-control" disabled>
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
                                            <input type="text" id="idordenc" class="form-control" readonly>
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
                                      <!--<button type="button" class="btn btn-default bdel_doc"><i class="fa fa-minus"></i>Quitar</button>-->
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
                                  <button type="button" class="btn btn-default btn_savecon" id="btn_savecon"><i class="fa fa-save"></i> Guardar Contrato </button>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
        </div>
        <!-- /.col -->
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
                                <button type="button" class="btn btn-primary btn_saveorden">Aceptar</button>
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
  $("#txttipmcon").val("N");

</script>

<script type="text/javascript">
  dispositivo={
    init:function()
    {
      var gdatadetalle=new Array();
      dispositivo.listar();
      //dispositivo.listarcontratos();
      dispositivo.listarorden();

    $( "#btn_savecon" ).on( "click", function() {

      var campo1, campo2;
      var scadena="";

      $("#tablecon tbody tr").each(function () {
            var campo1=$(this).find("td:eq(0) select").val(); //Tipo Documento
            var campo2=$(this).find("td:eq(1) input").val(); //Ruta Documento

          scadena=scadena + campo1 + "|" + campo2 + "|";

       });
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

    $(".btn_saveorden").click(function(event)
       {
         event.returnValue = false; /*para I.E.*/
         if(event.preventDefault) event.preventDefault();

           var selr = $("#tdatoso").jqGrid('getGridParam', 'selrow');
             if(selr) {
               var rowDatasel = $("#tdatoso").jqGrid('getRowData', selr);
               var grid = $("#tdatoso");
               var rowKey = grid.jqGrid('getGridParam',"selrow");

                 var idord = rowDatasel.IdOrden;
                 var ordcli = rowDatasel.NomCli;

                       //$("#iddispositivo"+(trs-1)+"").val(iddis+"-"+modelo);
                       $("#idord").val(idord);
                       $("#idordenc").val(ordcli);
                       //$("#nrosim").val(sim);
                       //$("#idn").val(idn);


                     $('#modal-orden').modal('hide');

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
            ,'idvehiculo':$("#idvehiculoc").val()
            ,'stdcontrato':$("#stdcontrato").val()
            ,'idord':$("#idord").val()
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
                            if ($("#txttipmcon").val()=="N")
                            {
                              mensajeview="Registro Exitoso!";
                            }else if($("#txttipmcon").val()=="U"){
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

    ,listar:function(){}

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
                        //{ label: 'Dispositivo', name: 'IdDispositivo', width: 100 },
                        { label: 'Mecanico', name: 'NomMec', width: 100 },
                        { label: 'Empresa', name: 'NombreComercial', width: 100 },
                        { label: 'Taller', name: 'Taller', width: 100 },
                        //{ label: 'Estado', name: 'EstadoOrden', width: 100 },
                        { label: 'Descripcion', name: 'Descripcion', width: 100 },
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
