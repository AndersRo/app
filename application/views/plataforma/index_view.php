<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <a class="btn btn-primary btn-xs new-modal" data-toggle="modal" id="view_create"><span class="fa fa-plus"></span></a>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Configuración</a></li>
      <li class="active">Plataforma</li>
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
            <!--<input type="hidden" name="idacceso" class="form-control" id="idacceso">-->
            <input type="hidden" name="opc" class="form-control" id="opc">
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
        <h4 class="modal-title">Actualizar Usuario </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

                <form role="form" id="frmdata">
                    <input type="hidden" name="idcliente" id="idcliente">
                    <input type="hidden" name="idacceso" id="idacceso">
                    <input type="hidden" name="opcion" id="opcion">

                    <div class="row">
                        <div class="col-md-6">
                        <!-- /.form-group -->
                          <div class="form-group">
                            <label>Cliente</label>
                            <div class="input-group input-group-sm">
                                <input type="text" id="cliente" class="form-control">
                                <span class="input-group-btn">
                                      <button type="button" class="btn btn-info btn-flat off-modal" data-toggle="modal" data-target="#myModalAsig">...</button>
                                        <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                                </span>
                            </div>
                          </div>

                        <div class="form-group">
                          <label for="role" class="control-label">Estado</label>

                          <div class="">
                            <select name="estado" id="estado" class="form-control">
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
                              <input type="checkbox" name="accesoweb" id="accesoweb">
                              Acceso Web
                            </label>
                            <label>
                              <input type="checkbox" name="accesoapp" id="accesoapp">
                              Acceso Movil
                            </label>
                        </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6" >
                          <!-- /.form-group -->
                          <div class="form-group">
                            <label>Nombre de Usuario</label>
                            <input type="text" class="form-control" name="login" id="login">
                          </div>

                        <!-- /.form-group -->
                          <div class="form-group">
                            <label>Clave</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="********">
                          </div>

                          <!-- /.form-group -->
                            <div class="form-group">
                              <label>Clave ON/OFF</label>
                              <input type="password" class="form-control" name="onoff" id="onoff" placeholder="****">
                            </div>

                            <div class="form-group spinner">
                              <label for="role" class="control-label">Conexiones Maximas</label>

                              <div class="">
                                <button type="button" class="btn-add">+</button>
                                <input type="text" class="input-counter" name="conexiones" id="conexiones" data-min="1" data-max="5" data-default="3">
                                <button type="button" class="btn-subtract">-</button>
                              </div>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btnsave">Guardar</button>
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
      dispositivo.validate();
      dispositivo.listar();

      $("#view_create").click(function(){
        window.location = "plataforma/create";
      });

      $(".btnsave").click(function(){
        //$("#frmdata").submit();
        dispositivo.registrar($("#frmdata"));
      });

      $('#accesoweb').click(function() {
        if( $('#accesoweb').is(':checked') ) {
          $('#accesoweb').val("0");
          //var web = $('#accesoweb').val();
          //alert('Seleccionado:'+web);
        }else{
          $('#accesoweb').val("1");
          //var web = $('#accesoweb').val();
          //alert('Seleccionado:'+web);
        }

    });


      $('#accesoapp').click(function() {
        if( $('#accesoapp').is(':checked') ) {
          $('#accesoapp').val("0");
          //var app = $('#accesoapp').val();
          //alert('Seleccionado:'+app);
        }else{
          $('#accesoapp').val("1");
          //var app = $('#accesoapp').val();
          //alert('Seleccionado:'+app);
        }

    });


    }
    ,event:function()
    {
      $(".delete-modal").click(function(event)
              {
                  event.returnValue = false; /*para I.E.*/
                  if(event.preventDefault) event.preventDefault();

                  $("#opc").val('D');
                  var idrow=$(this).data('id');
                  $("#tdatos").jqGrid('setSelection',idrow, false);
                  var selr = $("#tdatos").jqGrid('getGridParam', 'selrow');
                  var rowData = $("#tdatos").jqGrid('getRowData', selr)

                  $("#idacceso").val(rowData.IdAcceso);

                  swal({
                    title: "Configuración/Plataforma",
                    text: "¿Esta seguro de Eliminar este usuario?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si, borralo!",
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                  },
                  function (result) {
                      if (result){
                      dispositivo.registrar($("#frmdata").submit());
                      }
                  }
                );

              });

      $(".edit-modal").click(function(event)
      {
          event.returnValue = false; /*para I.E.*/
          if(event.preventDefault) event.preventDefault();
          $("#opcion").val("U");
          //$("#titleaction").text("Actualizar")
          var idrow=$(this).data('id');
          $("#tdatos").jqGrid('setSelection',idrow, false);
          var selr = $("#tdatos").jqGrid('getGridParam', 'selrow');
          var rowData = $("#tdatos").jqGrid('getRowData', selr)

              var widacceso = rowData.IdAcceso;
              var widcliente = rowData.IdCliente;
              var wcliente = rowData.Cliente;
              var waccapp = rowData.FlgAccesoApp;
              var waccweb = rowData.FlgAccesoWeb;
              var wmaxcon = rowData.MaxConexiones;
              var wlogin = rowData.LoginAcceso;
              var wstdacceso = rowData.EstadoAcceso;

              $("#cliente").val(wcliente);
              $("#idcliente").val(widcliente);
              $("#idacceso").val(widacceso);
              $("#login").val(wlogin);
              $("#estado").val(wstdacceso).trigger('change');
              $("#conexiones").val(wmaxcon);

              if (rowData.FlgAccesoWeb==0) {
                $("#accesoweb").attr('checked','checked');
              }else if (rowData.FlgAccesoWeb==1) {
                $("#accesoweb").removeAttr('checked');
              }
              if (rowData.FlgAccesoApp==0) {
                $("#accesoapp").attr('checked','checked');
              }else if (rowData.FlgAccesoApp==1) {
                $("#accesoapp").removeAttr('checked');
              }
              dispositivo.option();

              $("#modal-default").modal('show');
      });
    }
    ,validate:function(){
      //$("#idclienteu")
      //$("#idaccesou")
      //$("#opcion")
      //$("#cliente").attr('readonly','readonly');
      //$(".off-modal").attr('disabled','disabled');
      //$("#estado")
      //$("#accweb")
      //$("#accapp")
      //$("#nombreusuario")
      //$("#password").attr('readonly','readonly');
      //$("#onoff").attr('readonly','readonly');
      //$("#cnxmx")
    }
    ,option:function(){
      //$("#idclienteu")
      //$("#idaccesou")
      //$("#opcion")
      $("#cliente").attr('readonly','readonly');
      $(".off-modal").attr('disabled','disabled');
      //$("#estado")
      //$("#accweb")
      //$("#accapp")
      $("#password").attr('readonly','readonly');
      $("#onoff").attr('readonly','readonly');
      //$("#nombreusuario")
      //$("#password")
      //$("#onoff")
      //$("#cnxmx")
    }
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
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" data-id=' + rowObject.IdAcceso + '><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.IdAcceso + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Id. Acceso', name: 'IdAcceso', key: true, width: 50 },
                    { label: 'Id. Cliente', name: 'IdCliente', width: 50 },
                    { label: 'Cliente', name: 'Cliente', width: 150 },
                    { label: 'Acceso App', name: 'FlgAccesoApp', width: 50 },
                    { label: 'Acceso web', name: 'FlgAccesoWeb', width: 100 },
                    { label: 'Conex. Max.', name: 'MaxConexiones', width: 100 },
                    { label: 'Login', name: 'LoginAcceso', width: 100 },
                    { label: 'Acceso', name: 'EstadoAcceso', width: 100 },
                    { label: 'Acceso', name: 'Descripcion', width: 100 },

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
                    dispositivo.event();
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
              $("#tdatos").jqGrid('hideCol',['IdAcceso','EstadoAcceso']);
      }
      ,registrar:function(form)
      {
        //var wurl="</?php echo base_url(); ?>" + "plataforma/store";
        var wurl="<?php echo base_url('plataforma/store'); ?>";
        $.ajax({
                 async: true,
                 url: wurl,
                 type: "post",
                 dataType: 'json',
                 contentType: 'application/x-www-form-urlencoded',
                 data://$(form).serialize()
                 {
                   'opcion':$("#opcion").val()
                   ,'idacceso':$("#idacceso").val()
                   ,'idcliente':$("#idcliente").val()
                   ,'accesoapp':$("#accesoapp").val()
                   ,'accesoweb':$("#accesoweb").val()
                   ,'conexiones':$("#conexiones").val()
                   ,'login':$("#login").val()
                   ,'password':$("#password").val()
                   ,'onoff':$("#onoff").val()
                   ,'estado':$("#estado").val()
                 }
                 ,beforeSend: function(data){
                  waitingDialog.show('Procesando...', {dialogSize: 'sm'});
                 },
                 complete: function(data, status){
                    if (status=="success"){
                      var werror=JSON.parse(data.responseText).error;
                      var wmsg=JSON.parse(data.responseText).msg;
                      if (werror==0)
                        {
                          var wcodigo=JSON.parse(data.responseText).IdAcceso;
                          var mensajeview=""
                          waitingDialog.hide();
                          if ($("#opcion").val()=="N")
                          {
                            mensajeview="Registro Exitoso!";
                          }else if($("#opcion").val()=="U"){
                            mensajeview="Registro actualizado correctamente!";
                          }else{
                            mensajeview="Registro eliminado correctamente!";
                          }
                          swal(mensajeview, "Clickea para continuar!", "success");

                            $("#tdatos").trigger( 'reloadGrid' );
                            $("#modal-default").modal('hide');
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
                        text: wmsg,
                        type: "warning",
                      });
                    }
                 }
             });
      }
   }

   dispositivo.init();

</script>
