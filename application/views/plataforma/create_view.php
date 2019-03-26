<div class="content-wrapper" style="min-height: 973px; padding: 15px;">
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

        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active" id="t1"><a href="#tab_1" data-toggle="tab">Usuario</a></li>
              <li id="t2"><a href="#tab_2" data-toggle="tab">Detalle</a></li>

              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box box-warning">
                  <div class="box-header with-border">
                    <h3 class="box-title">Información de usuarios</h3>
                    <div class="box-tools pull-right">
                          <!--<button type="button" class="btn btn-default btn_save"><i class="fa fa-save"></i> Guardar Usuario </button>-->
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <form role="form" id="frmdata">
                          <input type="hidden" name="idclienteu" id="idclienteu">
                          <input type="hidden" name="idcontratou" id="idcontratou">
                          <input type="hidden" name="txttipm" id="txttipm">

                          <div class="row">
                              <div class="col-md-6">
                              <!-- /.form-group -->
                                <div class="form-group">
                                  <label>Cliente</label>
                                  <div class="input-group input-group-sm">
                                      <input type="text" id="cliente" class="form-control" readonly>
                                      <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat new-modal" data-toggle="modal" data-target="#myModalAsig">...</button>
                                              <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                                      </span>
                                  </div>
                                </div>

                                <!-- /.form-group -->
                                <!--<div class="form-group">
                                  <label>Contrato</label>
                                  <div class="input-group input-group-sm">
                                      <input type="text" id="contratou" class="form-control">
                                      <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat contrato-modal" data-toggle="modal">...</button>
                                              <a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>
                                      </span>
                                  </div>
                              </div>-->

                              <div class="form-group">
                                <label for="role" class="control-label">Estado</label>

                                <div class="">
                                  <select name="codstd" id="codstd" class="form-control">
                                    <?php
                                        foreach ($acceso as $row) {
                                            echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                                        }

                                     ?>
                                </select>
                                </div>
                              </div>


                                <!-- /.form-group -->
                                <div class="form-group">
                                  <label>
                                    <input type="checkbox" class="flat-red" id="accweb">
                                    Acceso Web
                                  </label>
                                  <label>
                                    <input type="checkbox" class="flat-red" id="accapp">
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

                                  <div class="form-group spinner">
                                    <label for="role" class="control-label">Conexiones Maximas</label>

                                    <div class="">
                                      <button type="button" class="btn-add">+</button>
                                  	  <input type="text" class="input-counter" id="cnxmx" data-min="1" data-max="5" data-default="3">
                                  	  <button type="button" class="btn-subtract">-</button>
                                    </div>
                                	  </div>
                                	</div>

                              </div>

                              </form>
                              <!-- /.col -->
                            </div>

                  </div>

                  <!-- /.box-body -->
                  <div class="box-footer">
                      <div class="btn-group pull-right" >
                          <button type="button" class="btn btn-primary btn_save" id="adduser"><i class="fa fa-save"></i> Guardar </button>
                          <a href="<?php echo base_url() ?>plataforma" class="btn btn-default"><i class="fa fa-mail-reply"></i> Cancelar</a>
                      </div>
                  </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

                <div class="box box-warning">
                  <div class="box-header with-border">
                    <h3 class="box-title">Información de usuarios</h3>
                    <div class="box-tools pull-right">
                          <!--<button type="button" class="btn btn-default btn_save"><i class="fa fa-save"></i> Guardar Usuario </button>-->
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <form role="form" id="frmdata">
                          <input type="hidden" name="idclienteud" id="idclienteud">
                          <input type="hidden" name="idacceso" id="idacceso">
                          <input type="hidden" name="idcontratoud" id="idcontratoud">
                          <input type="hidden" name="txttipmud" id="txttipmud">

                          <div class="row">
                              <div class="col-md-6">

                                <!-- /.form-group -->
                                <div class="form-group">
                                  <label>Contrato</label>
                                  <div class="input-group input-group-sm">
                                      <input type="text" id="contratoud" class="form-control">
                                      <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat contrato-modal" data-toggle="modal">...</button>
                                              <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                                      </span>
                                  </div>
                              </div>

                              </div>
                              <!-- /.col -->

                              <div class="col-md-6" >
                                <!-- /.form-group -->
                                <div class="form-group">
                                  <label>Nombre de Usuario</label>
                                  <input type="text" class="form-control" name="login" id="login" disabled>
                                </div>

                                <!-- /.form-group -->
                                  <div class="form-group">
                                    <label>Cliente</label>
                                    <input type="text" id="clienteud" class="form-control" disabled>
                                  </div>

                              </div>

                              <div>
                                  <table id="tdatosacc"> </table>
                                  <div id="pageracc"></div>
                              </div>

                              </div>

                              </form>
                              <!-- /.col -->
                            </div>

                  </div>

                  <!-- /.box-body -->
                  <div class="box-footer">
                      <div class="btn-group pull-right" >
                          <button type="button" class="btn btn-primary btn_save" id="adddet"><i class="fa fa-save"></i> Guardar </button>
                      </div>
                  </div>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
    </section>
    <!-- /.content -->
    </div>
  </div>


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


<script type="text/javascript">
  var $grid = $("#tdatosd"),
  newWidth = $grid.closest(".ui-jqgrid").parent().width();
  $.jgrid.defaults.width = newWidth;
  $.jgrid.defaults.responsive = true;
  $.jgrid.defaults.styleUI = 'Bootstrap';

  $("#txttipm").val( "N" );
  $("#txttipmud").val("N");
  $("#idcontratoud").val("0");
</script>

<script type="text/javascript">
  dispositivo={
    init:function()
    {
      dispositivo.listar();
      dispositivo.listarcontratos();
      dispositivo.listaruser();
      dispositivo.listaraccdet();


    $("#accweb").click(function() {

      //var web = $("#accweb").val();
      //$("#accweb").val(0);
      //alert("web:"+web);

      if( $('#accweb').is(':checked') ) {
        $("#accweb").val(0);
        //var web = $("#accweb").val();
        //alert('Seleccionado:'+web);
      }else{
        $("#accweb").val(1);
        //var web = $("#accweb").val();
        //alert('Seleccionado:'+web);
      }

  });


    $("#accapp").click(function() {
      if( $('#accapp').is(':checked') ) {
        $("#accapp").val(0);
        //var app = $("#accapp").val();
        //alert('Seleccionado:'+app);
      }else{
        $("#accapp").val(1);
        //var app = $("#accapp").val();
        //alert('Seleccionado:'+app);
      }

  });

  $("#adduser").click(function(){
    dispositivo.guardar();
  });

  $("#adddet").click(function(){
    dispositivo.guardardet();
  });


    $(".contrato-modal").on("click", function(){
      //Volviendo a pasar los parametros de busqueda
        var myfilter = { groupOp: "AND", rules: []};
        myfilter.rules.push({field:"IdCliente",op:"bw",data:$("#idclienteu").val()});
          $('#tdatoscont').jqGrid('setGridParam', {search: true
            , postData: {
             'filters': JSON.stringify(myfilter)
                        }
                      }
                  );
          $('#tdatoscont').trigger('reloadGrid');
      $("#myModalCont").modal('show');
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
                 var dni = rowDatasel.CodigoIdentificacion;

                       //$("#iddispositivo"+(trs-1)+"").val(iddis+"-"+modelo);
                       $("#idclienteu").val(idcli);
                       $("#cliente").val(apa+" "+ama+" "+nom);
                       $("#nombreusuario").val(dni);
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

    $(".btn_addcont").click(function(event)
       {
         event.returnValue = false; /*para I.E.*/
         if(event.preventDefault) event.preventDefault();

           var selr = $("#tdatoscont").jqGrid('getGridParam', 'selrow');
             if(selr) {
               var rowDatasel = $("#tdatoscont").jqGrid('getRowData', selr);
               var grid = $("#tdatoscont");
               var rowKey = grid.jqGrid('getGridParam',"selrow");

                 var idcont = rowDatasel.IdContrato;
                 var contcli = rowDatasel.NomCli;

                       $("#idcontratoud").val(idcont);
                       $("#contratoud").val(contcli);

                      dispositivo.some_function(idcont);
                      //var id = $("#idcontratoud").val();
                      //dispositivo.listaraccdet();
                      //var id = $("#idcontratoud").val();
                      //$('#tdatosacc').trigger('reloadGrid');
                      //$('#tdatosacc').jqGrid('clearGridData');
                      $('#tdatosacc').jqGrid('clearGridData');
                      //dispositivo.listaraccdet();
                     $('#myModalCont').modal('hide');

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
    ,carga:function(){

      var myfilter = { groupOp: "AND", rules: []};
      myfilter.rules.push({field:"IdAcceso",op:"eq",data:$("#idacceso").val()});
      $('#tdatosacc').jqGrid('setGridParam', {search: true
          , postData: {
           'filters': JSON.stringify(myfilter)
                      }
                    }
                );
        $('#tdatosacc').trigger('reloadGrid');



      //var id = $("#idcontratoud").val();
      //alert(id);
      /*$('#tdatosacc').jqGrid('setGridParam', {postData: {'token':$('input[name=token]').val()
                                                        ,'idacceso' : $("#idacceso").val()
                                                        }
                                            }
                            );

    $('#tdatosacc').jqGrid('clearGridData');*/
    }
    ,guardar:function()
    {
      var wurl="<?php echo base_url('plataforma/store'); ?>";

      $.ajax({
        async: true,
        url: wurl,
        type: "post",
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        data://$("#frm-contratos").serialize(),
        {
          'opcion':$("#txttipm").val()
          ,'idcliente':$("#idclienteu").val()
          //,'idcontrato':$("#idcontratou").val()
          ,'accesoapp':$("#accapp").val()
          ,'accesoweb':$("#accweb").val()
          ,'conexiones':$("#cnxmx").val()
          ,'login':$("#nombreusuario").val()
          ,'password':$("#password").val()
          ,'onoff':$("#onoff").val()
          ,'estado':$("#codstd").val()

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
                          $("#tab_1").removeClass("active");
                          $("#tab_2").addClass( "active");
                          $("#t1").removeClass("active");
                          $("#t2").addClass( "active");
                          //$("#tab_1").removeAttr("active");
                          //$("#tab_2").attr( "active", "active" );
                          //$("#tab_1").removeClass("active");
                          //$("#tab_2").addClass( "active");
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

    ,guardardet:function()
    {
      var wurl="<?php echo base_url('usuarios/store'); ?>";

      $.ajax({
        async: true,
        url: wurl,
        type: "post",
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        data://$("#frm-contratos").serialize(),
        {
          'opcion':$("#txttipmud").val()
          ,'idacceso':$("#idacceso").val()
          ,'idcontrato':$("#idcontratoud").val()

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
                          if ($("#txttipmud").val()=="N")
                          {
                            mensajeview="Registro Exitoso!";
                          }else if($("#txttipmud").val()=="U"){
                            mensajeview="Registro actualizado correctamente!";
                          }else{
                            mensajeview="Registro eliminado correctamente!";
                          }
                          //bootbox.alert(mensajeview);
                          //compras.limpiarcampos();
                          swal(mensajeview, "Clickea para continuar!", "success");
                          location.href ="<?php echo base_url() ?>plataforma";
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

    ,some_function:function(strA_valor)
    {
          var wurl="<?php echo base_url('usuarios/listid'); ?>";

          $.ajax({
            async: true,
            url: wurl,
            type: "post",
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data://$("#frm-clientes").serialize(),
            {
              'idcontrato':strA_valor
            },
            beforeSend: function(data){

            },
            complete: function(data, status){

              var json = JSON.parse(data.responseText);

                $("#idacceso").val( json[0].IdAcceso );
                $("#idclienteud").val( json[0].IdCliente );
                $("#clienteud").val( json[0].cliente );
                $("#login").val( json[0].LoginAcceso );
                dispositivo.carga();
              }
          });

    }

    ,listar:function(){}

      ,listarcontratos:function()
      {
          var wurl="<?php echo base_url('contratos/list'); ?>";
          $("#tdatoscont").jqGrid({
                  url: wurl,
                  mtype: "get",
                  styleUI : 'Bootstrap',
                  responsive: true,
                  postData: {'token':$('input[name=token]').val()},
                  datatype: "json",
                  colModel: [
                      { label: 'Ide. ContratoOrdenes', name: 'IdContratoOrdenes', key: true, width: 100 },
                      { label: 'Ide. Contrato', name: 'IdContrato', width: 100 },
                      { label: 'Ide. Orden', name: 'IdOrden', width: 100 },
                      { label: 'Tipo Contrato', name: 'CodTipoContrato', width: 200 },
                      { label: 'Ide. Cliente', name: 'IdCliente', width: 200 },
                      { label: 'Cliente', name: 'NomCli', width: 200 },
                      { label: 'IdEmpresa', name: 'IdEmpresa', width: 200 },
                      { label: 'Empresa', name: 'RazonSocial', width: 200 },
                      { label: 'Ide. Vehiculo', name: 'IdVehiculo', width: 200 },
                      { label: 'Vehiculo', name: 'chasis', width: 200 },
                      { label: 'Estado', name: 'EstadoContrato', width: 200 },
                      { label: 'Fecha Inicio', name: 'FechaInicio', width: 200 },
                      { label: 'Fecha Fin', name: 'FechaFin', width: 200 },
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
                      //sucursal.eventload();
                  },
                  sortname: 'IdContratoOrdenes',
                  sortorder: 'desc',
                  pager: "#pagercont"
                      });

                $("#tdatoscont").jqGrid('navGrid','#pagercont',
                {edit: false, add: false, del: false, search: false, refresh:true},
                {},
                {},
                {},
                {multipleSearch:true, multipleGroup:false, showQuery: true}
                );

                $("#tdatoscont").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
                $("#tdatoscont").jqGrid('setFrozenColumns');
                $("#tdatoscont").jqGrid('hideCol',['IdCliente','IdEmpresa', 'IdVehiculo','IdContratoOrdenes','IdOrden']);
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
                      { label: 'Ide. Cliente', name: 'IdCliente', width: 75 },
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
        ,listaraccdet:function()
        {
            var idacc = $('#idacceso').val();
            var wurl="<?php echo base_url('plataforma/listacc'); ?>";
            $("#tdatosacc").jqGrid({
                    url: wurl,
                    mtype: "get",
                    styleUI : 'Bootstrap',
                    responsive: true,
                    postData: {'token':$('input[name=token]').val(),'idacceso':idacc},
                    datatype: "json",
                    colModel: [
                        { label: 'COD', name: 'IdAccesoDetalle', width: 75 },
                        { label: 'Id. Acceso', name: 'IdAcceso', key: true, width: 75 },
                        { label: 'IdContrato', name: 'IdContrato', width: 75 },
                        { label: 'Login', name: 'LoginAcceso', width: 200 },
    					          { label: 'Id.Vehiculo', name: 'IdVehiculo', width: 100 },
    					          { label: 'Chasis', name: 'Chasis', width: 100 },
    					          { label: 'CodTipoContrato', name: 'CodTipoContrato', width: 100 },
                        { label: 'Contrato', name: 'Descripcion', width: 100 },
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
                        //dispositivo.eventgrid();

                    },
                    sortname: 'IdAccesoDetalle',
                    sortorder: 'desc',
                    pager: "#pageracc",
                    });

                  $("#tdatosacc").jqGrid('navGrid','#pageracc',
                  {edit: false, add: false, del: false, search: false, refresh:true},
                  {},
                  {},
                  {},
                  {multipleSearch:true, multipleGroup:false, showQuery: true}
                  );

                  $("#tdatosacc").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
                  $("#tdatosacc").jqGrid('setFrozenColumns');
                  $("#tdatosacc").jqGrid('hideCol',['IdActor']);
          }

}

   dispositivo.init();

</script>
