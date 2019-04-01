<div class="content-wrapper" style="min-height: 973px; padding: 15px;">

  <section class="content-header">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Nueva Orden.
            <small class="pull-right"><?php echo "Fecha: " . date("d") . " de " . date("m") . " del " . date("Y"); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
    </section>

    <section>
      <div class="content">

        <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title"><b>REGISTRAR</b></h3>
          </div>

          <div class="box-body">

            <!--Form start-->
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
                  <select name="estado" id="estado" class="form-control" disabled>
                    <?php
                        foreach ($orden as $row) {
                            echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
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

              <!--<div class="form-group">
                <label for="role" class="col-sm-2 control-label">Cliente</label>

                <div class="col-sm-10">
                  <select name="idcliente" id="idcliente" class="form-control selectpicker" data-live-search="true">
                    </?php
                        foreach ($clientes as $row) {
                            echo '<option value="'.$row->IdCliente.'">'.$row->Cliente.'</option>';
                        }

                     ?>
                </select>
                </div>
              </div>-->

              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Cliente</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-sm">
                          <input type="hidden" name="idcliente" id="idcliente" class="form-control" readonly>
                          <input type="text" name="cliente" id="cliente" class="form-control" readonly>
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-info btn-flat modal-cliente" id="abrircli">...</button>
                              <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                            </span>
                  </div>
                </div>
              </div>

              <!--<div class="form-group">
                <label for="role" class="col-sm-2 control-label">Vehiculo</label>

                <div class="col-sm-10">
                  <select name="idvehiculo" id="idvehiculo" class="form-control selectpicker" data-live-search="true">
                    </?php
                        foreach ($vehiculos as $row) {
                            echo '<option value="'.$row->IdVehiculo.'">'.$row->vehiculo.'</option>';
                        }

                     ?>
                </select>
                </div>
              </div>-->

              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Vehiculo</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-sm">
                          <input type="hidden" name="idvehiculo" id="idvehiculo" class="form-control" readonly>
                          <input type="text" name="vehiculo" id="vehiculo" class="form-control" readonly>
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-info btn-flat " id="abrirveh">...</button>
                              <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                            </span>
                  </div>
                </div>
              </div>

              <!--<div class="form-group">
                <label for="role" class="col-sm-2 control-label">Mecanico</label>

                <div class="col-sm-10">
                  <select name="idmecanico" id="idmecanico" class="form-control selectpicker" data-live-search="true">
                    </?php
                        foreach ($mecanicos as $row) {
                            echo '<option value="'.$row->IdMecanico.'">'.$row->Mecanico.'</option>';
                        }

                     ?>
                </select>
                </div>
              </div>-->

              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Mecánico</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-sm">
                          <input type="hidden" name="idmecanico" id="idmecanico" class="form-control" readonly>
                          <input type="text" name="mecanico" id="mecanico" class="form-control" readonly>
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-info btn-flat " id="abrirmec">...</button>
                              <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                            </span>
                  </div>
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
                                <input type="text" id="iddispositivo1" class="form-control" readonly>
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

            <!--Form end-->

          </div>

          <div class="box-footer">
            <div class="btn-group pull-right" >
            <a href="<?php echo base_url() ?>ordenes" class="btn btn-default"><i class="fa fa-mail-reply"></i> Cancelar</a>
            <button type="button" id="btnguardar" name="btnguardar" class="btn btn-primary">Guardar Cambios</button>
            <!--<a class="btn btn-app" id="savet">
              <i class="fa fa-save"></i> Save
            </a>-->
          </div>
          </div>

        </div>

      </div>
    </section>


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
            <div class="modal fade" id="modal-cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Agregar Cliente</h4>
                        </div>

                        <div class="modal-body">
                            <!-- form start -->
                            <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                            <div>
                                <table id="tdatoscli"> </table>
                                <div id="pagercli"></div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary btn_savecli">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal-vehiculo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Agregar Vehiculo</h4>
                        </div>

                        <div class="modal-body">
                            <!-- form start -->
                            <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                            <div>
                                <table id="tdatosveh"> </table>
                                <div id="pagerveh"></div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary btn_saveveh">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal-mecanico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Agregar Mecanico</h4>
                        </div>

                        <div class="modal-body">
                            <!-- form start -->
                            <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                            <div>
                                <table id="tdatosm"> </table>
                                <div id="pagerm"></div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary btn_savemec">Aceptar</button>
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
</script>

<script type="text/javascript">
  dispositivo={
    init:function()
    {
      $("#txttipm").val( "N" );
      $("#idordencon").val( "0" );
      var gdatadetalle=new Array();
      dispositivo.listar();
      dispositivo.mtd_event();
      dispositivo.listarcli();
      dispositivo.listarveh();
      dispositivo.listarmec();

    $("#iddispositivo").change(function(){
      var selectValue = $(this).val()
      dispositivo.some_function(selectValue);
	   });

     $("#abrircli").on("click", function(){
       $('#tdatoscli').trigger('reloadGrid');
       $("#modal-cliente").modal('show');
     });

     $("#abrirveh").on("click", function(){
       $('#tdatosveh').trigger('reloadGrid');
       $("#modal-vehiculo").modal('show');
     });

     $("#abrirmec").on("click", function(){
       $('#tdatosm').trigger('reloadGrid');
       $("#modal-mecanico").modal('show');
     });

     $(".btn_savecli").click(function(event)
        {
          event.returnValue = false; /*para I.E.*/
          if(event.preventDefault) event.preventDefault();

            var selr = $("#tdatoscli").jqGrid('getGridParam', 'selrow');
              if(selr) {
                var rowDatasel = $("#tdatoscli").jqGrid('getRowData', selr);
                var grid = $("#tdatoscli");
                var rowKey = grid.jqGrid('getGridParam',"selrow");

                  var idcli = rowDatasel.IdCliente;
                  var apa = rowDatasel.Apellido_Paterno;
                  var ama = rowDatasel.Apellido_Materno;
                  var nom = rowDatasel.PrimerNombre;

                        //$("#iddispositivo"+(trs-1)+"").val(iddis+"-"+modelo);
                        $("#idcliente").val(idcli);
                        $("#cliente").val(apa+" "+ama+", "+nom);
                        //$("#nrosim").val(sim);
                        //$("#idn").val(idn);


                      $('#modal-cliente').modal('hide');

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


    $(".btn_saveveh").click(function(event)
       {
         event.returnValue = false; /*para I.E.*/
         if(event.preventDefault) event.preventDefault();

           var selr = $("#tdatosveh").jqGrid('getGridParam', 'selrow');
             if(selr) {
               var rowDatasel = $("#tdatosveh").jqGrid('getRowData', selr);
               var grid = $("#tdatosveh");
               var rowKey = grid.jqGrid('getGridParam',"selrow");

                 var idveh = rowDatasel.IdVehiculo;
                 var placa = rowDatasel.Placa;
                 var chasis = rowDatasel.Chasis;

                       $("#idvehiculo").val(idveh);
                       //$("#cliente").val(apa+" "+ama+", "+nom);
                       if (placa=="") {
                         $("#vehiculo").val(chasis);
                       }else{
                         $("#vehiculo").val(placa);
                       }/*if(chasis==""){
                         $("#vehiculo").val(placa);
                       }else{
                         $("#vehiculo").val(chasis);
                       }*/

                     $('#modal-vehiculo').modal('hide');

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

       $(".btn_savemec").click(function(event)
          {
            event.returnValue = false; /*para I.E.*/
            if(event.preventDefault) event.preventDefault();

              var selr = $("#tdatosm").jqGrid('getGridParam', 'selrow');
                if(selr) {
                  var rowDatasel = $("#tdatosm").jqGrid('getRowData', selr);
                  var grid = $("#tdatosm");
                  var rowKey = grid.jqGrid('getGridParam',"selrow");

                    var idmec = rowDatasel.IdMecanico;
                    var apa = rowDatasel.Apellido_Paterno;
                    var ama = rowDatasel.Apellido_Materno;
                    var nom = rowDatasel.PrimerNombre;

                          $("#idmecanico").val(idmec);
                          $("#mecanico").val(apa+" "+ama+", "+nom);

                        $('#modal-mecanico').modal('hide');

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

    }

    ,mtd_event:function(){

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

              '<td> <select name="tipotrabajo" id="tipotrabajo'+(i+1)+'" class="form-control"><?php foreach ($trabajo as $row) {echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';} ?></select></td>'+

              '<td><div class="input-group input-group-sm"><input name="iddispositivo'+(i+1)+'" id="iddispositivo'+(i+1)+'" type="text" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-info btn-flat new-modal" data-toggle="modal" data-target="#modal-dispositivo">...</button></span></div></td>'+

              '<td><div class="input-group date"><div class="input-group-addon"><i class="fa fa-phone"></i></div><input type="text" id="nrosim'+(i+1)+'" class="form-control" data-inputmask="" data-mask></div></td>'+

              '<td><div class="input-group"><div class="input-group-addon"><i class="fa fa-asterisk"></i></div><input type="text" name="idn'+(i+1)+'" class="form-control" id="idn'+(i+1)+'" placeholder="Nro IDN"></div></td></tr>';
         }

          $("#tabledis").append(fila);
        }
      });

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
                            swal(mensajeview, "Clickea para continuar!", "success");
                            location.href ="<?php echo base_url() ?>ordenes";
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
                    { label: 'Serie', name: 'serie', width: 75 },
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
                width: null,
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

      ,listarcli:function()
      {
          var wurl="<?php echo base_url('clientes/list'); ?>";
          $("#tdatoscli").jqGrid({
                  url: wurl,
                  mtype: "get",
                  styleUI : 'Bootstrap',
                  responsive: true,
                  postData: {'token':$('input[name=token]').val()},
                  datatype: "json",
                  colModel: [
                      { label: 'Ide. Cliente', name: 'IdCliente', width: 75 },
                      { label: 'Id. Actor', name: 'IdActor', key: true, width: 75 },
                      { label: 'Apellido Paterno', name: 'Apellido_Paterno', width: 200 },
                      { label: 'Apellido Materno', name: 'Apellido_Materno', width: 200 },
                      { label: 'Nombre', name: 'PrimerNombre', width: 100 },
                      { label: 'Razon Social', name: 'RazonSocial', width: 100 },
                      { label: 'COD Doc', name: 'TipoDocumento', width: 100 },
                      { label: 'Tipo Doc', name: 'Descripcion', width: 100 },
                      { label: 'Nro Doc', name: 'CodigoIdentificacion', width: 100 },
                      { label: 'RUC', name: 'RUC', width: 200 },
                  ],
                  viewrecords: true,
                  height: 300,
                  rowNum: 100,
                  width: null,
                  ShrinkToFit: false,
                  shrinkToFit: false,
                  rownumbers: true,
                  jsonReader: {
                    root: "rows",
                    repeatitems: false
                  },
                  gridview: true,
                  gridComplete: function(){

                  },
                  sortname: 'idcliente',
                  sortorder: 'desc',
                  pager: "#pagercli",
                  });

                $("#tdatoscli").jqGrid('navGrid','#pagercli',
                {edit: false, add: false, del: false, search: false, refresh:true},
                {},
                {},
                {},
                {multipleSearch:true, multipleGroup:false, showQuery: true}
                );

                $("#tdatoscli").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
                $("#tdatoscli").jqGrid('setFrozenColumns');
                $("#tdatoscli").jqGrid('hideCol',['IdActor','TipoDocumento']);
        }
        ,listarveh:function()
        {
            var wurl="<?php echo base_url('vehiculos/list'); ?>";
            $("#tdatosveh").jqGrid({
                    url: wurl,
                    mtype: "get",
                    styleUI : 'Bootstrap',
                    responsive: true,
                    postData: {'token':$('input[name=token]').val()},
                    datatype: "json",
                    colModel: [
                        { label: 'Ide. Vehiculo', name: 'IdVehiculo', key: true, width: 75 },
                        { label: 'Placa', name: 'Placa', width: 75 },
                        { label: 'Chasis', name: 'Chasis', width: 200 },
                        { label: 'Motor', name: 'Motor', width: 200 },
                        { label: 'Marca', name: 'Marca', width: 200 },
                        { label: 'Modelo', name: 'Modelo', width: 200 },
                        { label: 'Color', name: 'Color', width: 100 },
                    ],
                    viewrecords: true,
                    height: 300,
                    rowNum: 100,
                    width: null,
                    ShrinkToFit: false,
                    shrinkToFit: false,
                    rownumbers: true,
                    jsonReader: {
                      root: "rows",
                      repeatitems: false
                    },
                    gridview: true,
                    gridComplete: function(){
                    },
                    sortname: 'idvehiculo',
                    sortorder: 'desc',
                    pager: "#pagerveh"
                        });

                  $("#tdatosveh").jqGrid('navGrid','#pagerveh',
                  {edit: false, add: false, del: false, search: false, refresh:true},
                  {},
                  {},
                  {},
                  {multipleSearch:true, multipleGroup:false, showQuery: true}
                  );

                  $("#tdatosveh").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
                  $("#tdatosveh").jqGrid('setFrozenColumns');
                  $("#tdatosveh").jqGrid('hideCol',['idmodelo']);
          }



          ,listarmec:function()
          {
              var wurl="<?php echo base_url('mecanicos/list'); ?>";
              $("#tdatosm").jqGrid({
                      url: wurl,
                      mtype: "get",
                      styleUI : 'Bootstrap',
                      responsive: true,
                      postData: {'token':$('input[name=token]').val()},
                      datatype: "json",
                      colModel: [
                          { label: 'Ide. Mecanico', name: 'IdMecanico', width: 75 },
                          { label: 'Id. Actor', name: 'IdActor', key: true, width: 75 },
                          { label: 'Apellido Paterno', name: 'Apellido_Paterno', width: 200 },
                          { label: 'Apellido Materno', name: 'Apellido_Materno', width: 200 },
                    			{ label: 'Nombre', name: 'PrimerNombre', width: 200 },
                    			{ label: 'Razon Social', name: 'RazonSocial', width: 100 },
                    			{ label: 'COD Doc', name: 'TipoDocumento', width: 100 },
                          { label: 'Tipo Doc', name: 'Descripcion', width: 100 },
                          { label: 'Nro Doc', name: 'CodigoIdentificacion', width: 100 },
                          { label: 'RUC', name: 'RUC', width: 300 },
                      ],
                      viewrecords: true,
                      height: 300,
                      rowNum: 100,
                      width: null,
                      ShrinkToFit: false,
                      shrinkToFit: false,
                      rownumbers: true,
                      jsonReader: {
                        root: "rows",
                        repeatitems: false
                      },
                      gridview: true,
                      gridComplete: function(){
                      },
                      sortname: 'idmecanico',
                      sortorder: 'desc',
                      pager: "#pagerm"
                          });

                    $("#tdatosm").jqGrid('navGrid','#pagerm',
                    {edit: false, add: false, del: false, search: false, refresh:true},
                    {},
                    {},
                    {},
                    {multipleSearch:true, multipleGroup:false, showQuery: true}
                    );

                    $("#tdatosm").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
                    $("#tdatosm").jqGrid('setFrozenColumns');
                    $("#tdatosm").jqGrid('hideCol',['IdActor','RUC','RazonSocial']);
            }

}

   dispositivo.init();

</script>
