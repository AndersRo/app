<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Configuracion</a></li>
      <li class="active">Usuarios</li>
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

        <div class="btn-group pull-right" >
            <a class="btn btn-primary new-modal" data-toggle="modal" id="btnNuevo" data-target=".bs-registro-modal-lg" ><i class="fa fa-plus"></i> Nuevo</a>
            <button type="button" class="btn btn-danger beditar"><i class="fa fa-edit"></i> Editar</button>
            <a class="btn btn-info new-modal" id="btn-addopc" ><i class="fa fa-users"></i> Opciones</a>
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
        <div class="btn-group pull-right" >
          <button type="button" class="btn btn-danger beliminar"><i class="fa fa-trash"></i> Eliminar</button>
        </div>
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade bs-registro-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="close btn-modal-reg" type="button">&times;</button>
              <h4 class="modal-title">Usuario</h4>
          </div>
          <div class="modal-body">
              <div class="panel panel-default">
                    <div class="panel-body nopadding">
                        <form class="form-horizontal form-bordered" id="frm-registro">
                            <input type=hidden name="opcion" id="opcion" value="N">
                            <input type=hidden name="opcion2" id="opcion2" value="S">
                            <input type=hidden name="idactor" id="idactor" value="0">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Código</label>
                                <div class="col-sm-10">
                                    <input type="text" id="idusuario" name="idusuario" placeholder="usuario" class="form-control empty" readonly="readonly" />
                                </div>
                            </div>
                            <!-- form-group -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Documento</label>
                                <div class="col-sm-3">
                                    <select id="tipodocumento" name="tipodocumento" class="form-control" data-placeholder="Seleccione tipo" class="form-control" style="width: 100%" required>
                                      <?php
                                          foreach ($tipodocumento as $row) {
                                              echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                                          }

                                       ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="nrodocumento" name="nrodocumento" placeholder="Nro Documento" class="form-control empty" required />
                                </div>
                            </div>
                            <!-- form-group -->
                            <div class="form-group g-natural">
                                <label class="col-sm-2 control-label">Ape. y Nom.</label>
                                <div class="col-sm-3">
                                    <input type="text" id="paterno" name="paterno" placeholder="Apellido Paterno" class="form-control empty natural" required />
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="materno" name="materno" placeholder="Apellido Materno" class="form-control empty natural" required />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" id="pnombres" name="pnombres" placeholder="Nombres" class="form-control empty natural" required />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" id="snombres" name="snombres" placeholder="Nombres" class="form-control empty natural" required />
                                </div>
                            </div><!-- form-group -->
                            <div class="form-group g-juridico">
                                <label class="col-sm-2 control-label">Dirección</label>
                                <div class="col-sm-10">
                                    <input type="text" id="direccion" name="direccion" placeholder="Direccion" class="form-control empty juridico" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Info. Contacto</label>
                                <div class="col-sm-3">
                                    <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="form-control empty" />
                                </div>

                            </div> <!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Credenciales</label>
                                <div class="col-sm-3">
                                    <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" class="form-control empty" />
                                </div>
                                <div class="col-sm-3">
                                    <input type="password" id="password" name="password" placeholder="************" class="form-control empty" />
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Estado</label>
                                <div class="col-sm-10">
                                  <select id="estado" name="estado" class="form-control" data-placeholder="Seleccione un perfil" class="form-control" style="width: 100%" required>
                                      <?php
                                          foreach ($login as $key => $value) {
                                              echo '<option value="'.$value->codigo.'">'.$value->Descripcion.'</option>';
                                          }
                                       ?>
                                  </select>
                                </div>

                            </div><!-- form-group -->
                        </form>
                    </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-modal-reg" data-dismiss="modal"><i class="fa fa-times"></i>Cancelar</button>
            <button type="button" class="btn btn-success btn-save btn-modal-ubg"><i class="fa fa-check"></i>Aceptar</button>
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
</script>

<!--<script type="text/javascript">
$(window).on("resize", function () {
  var $grid = $("#tdatos"),
      newWidth = $grid.closest(".ui-jqgrid").parent().width();
  $grid.jqGrid("setGridWidth", newWidth, true);
});
</script>-->

<script type="text/javascript">
  var idgrilla="#tdatos";
  dispositivo={
    init:function()
    {
      dispositivo.event();
      dispositivo.validate();
      dispositivo.listar();
    //  dispositivo.mtd_event();

    }
    ,event:function(){

      $("#btnNuevo").click(function(){
        $("#opcion").val('N');
        $("#opcion2").val('S');
        $("#idactor").val(0);
        $("#idusuario").val(0);
        $("#password").removeAttr('readonly');
        $("#nrodocumento").removeAttr('readonly');
        $("#tipodocumento").attr('disabled','disabled');

        dispositivo.limpiar();

        //$('#modal-default').modal('show');
      });

      $( ".btn-save" ).on( "click", function() {
  		    dispositivo.guardar();
  		});

      $("#btn-addopc").click(function(event)
      {
          event.returnValue = false; /*para I.E.*/
          if(event.preventDefault) event.preventDefault();

          var selr = $("#tdatos").jqGrid('getGridParam', 'selrow');
            if(selr) {
              var rowDatasel = $("#tdatos").jqGrid('getRowData', selr);
              var grid = $("#tdatos");
              var rowKey = grid.jqGrid('getGridParam',"selrow");

                var widusuario = rowDatasel.id;
                var wlogin = rowDatasel.login;

                swal({
                  title: "Configuracion/Usuarios",
                  text: "¿Desea agregar opciones de usuario?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Si, Agregar!",
                  closeOnConfirm: true,
                  showLoaderOnConfirm: true
                },
                function (result) {
                    if (result){
                      //alert(widusuario+' '+wlogin);
                      location.href ="<?php echo base_url() ?>usuarios/create/N/" + widusuario
                    }
                    //dispositivo.guardarcontrato();
                    //$('#tdatos').trigger('reloadGrid');
                });

            }else {

              swal({
                title: "Error!",
                text: "Debe seleccionar un usuario",
                type: "warning",
              });
              return false;
            }

      });

    }

    ,mtd_event:function()
    {

        $(".beliminar").click(function(event)
        {
            event.returnValue = false; /*para I.E.*/
            if(event.preventDefault) event.preventDefault();
            $("#opcion").val('D');
            $("#opcion2").val('S');
            $("#idactor").val(0);
            //$("#idusuario").val(0);
            var selr = jQuery(idgrilla).jqGrid('getGridParam', 'selrow');
            if(selr) {
                var rowData = jQuery(idgrilla).jqGrid('getRowData', selr)
                var widusuario = rowData.id;

                $("#idusuario").val(widusuario);

                swal({
                  title: "Configuracion/Usuarios",
                  text: "¿Desea eliminar este usuario?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Si, Eliminarlo!",
                  closeOnConfirm: true,
                  showLoaderOnConfirm: true
                },
                function (result) {
                    if (result){
                      dispositivo.guardar();
                      $('.bs-registro-modal-lg').modal('hide');
                    }

                });

            }else {
              swal({
                title: "Error!",
                text: "Debe seleccionar un registro!",
                type: "warning",
              });
                return false;
            }
        });

        $(".beditar").click(function(event)
        {
            event.returnValue = false; /*para I.E.*/
            if(event.preventDefault) event.preventDefault();
            $("#opcion").val('U');
            $("#opcion2").val('S');
            $("#titleaction").text("Actualizar");
            var selr = jQuery(idgrilla).jqGrid('getGridParam', 'selrow');
            if(selr) {
                var rowData = jQuery(idgrilla).jqGrid('getRowData', selr)
                var wusuario = rowData.id;
                var wactor = rowData.idactor;
                var wlogin = rowData.login;
                var wapa = rowData.Apellido_Paterno;
                var wama = rowData.Apellido_Materno;
                var wpnombre = rowData.PrimerNombre;
                var wsnombre = rowData.SegundoNombre;
                var wtipodoc = rowData.TipoDocumento;
                var wcodidenti = rowData.CodigoIdentificacion;
                var wdir = rowData.Direccion;
                var wtel = rowData.Telefono;
                var wcestado = rowData.codestado;

                $("#idactor").val(wactor);
                $("#idusuario").val(wusuario);
                $("#tipodocumento").val(wtipodoc).trigger('change');
                $("#nrodocumento").val(wcodidenti);
                $("#paterno").val(wapa);
                $("#materno").val(wama);
                $("#pnombres").val(wpnombre);
                $("#snombres").val(wsnombre);
                $("#direccion").val(wdir);
                $("#telefono").val(wtel);
                $("#usuario").val(wlogin);
                $("#estado").val(wcestado).trigger('change');

                dispositivo.disableedit();
                $('.bs-registro-modal-lg').modal('show');

            }else {
                bootbox.alert({
                    message: "Debe de Selecionar un registro",
                    size: 'small'
                });
                return false;
            }
        });

        /*$(".bdeleteopc").click(function(event)
            {
                event.returnValue = false; /*para I.E.
                if(event.preventDefault) event.preventDefault();
                $("#opc").val("D");

                var selr = jQuery(idgrilla).jqGrid('getGridParam', 'selrow');
                if(selr) {
                    var rowData = jQuery(idgrilla).jqGrid('getRowData', selr)
                    var widopciones = rowData.IdOpciones;
                    //var wdescripcion = rowData.DESCRIPCION;
                    $("#idopcion").val(widopciones);
                    //$("#descripcion").val(wdescripcion);

                    swal({
                      title: "Usuario/Opción",
                      text: "¿Esta seguro de eliminar esta opción?",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonClass: "btn-danger",
                      confirmButtonText: "Si, Eliminar!",
                      closeOnConfirm: true,
                      showLoaderOnConfirm: true
                    },
                    function (result) {
                        if (result){
                          usuarios.set_registrar($("#frmdata").submit());
                        }

                    });

                }else {
                  swal({
                    title: "Error!",
                    text: "Debe seleccionar una opción",
                    type: "warning",
                  });
                    return false;
                }
            });*/

        /*$(".btn_save").click(function(event)
        {
            event.returnValue = false; /*para I.E.
            if(event.preventDefault) event.preventDefault();
            $("#frmdata").submit();
        });*/


    }
    ,limpiar:function(){
      $("#nrodocumento").val("");
      $("#paterno").val("");
      $("#materno").val("");
      $("#pnombres").val("");
      $("#snombres").val("");
      $("#direccion").val("");
      $("#telefono").val("");
      $("#usuario").val("");
      $("#password").val("");
    }
    ,guardar:function()
  	{

  		  var wurl="<?php echo base_url('clientes/store'); ?>";

  		  $.ajax({
  				async: true,
  				url: wurl,
  				type: "post",
  				dataType: 'json',
  				contentType: 'application/x-www-form-urlencoded',
  				data://$("#frm-clientes").serialize(),
  				{
            'opcion1':$("#opcion").val()
          , 'opcion2':$("#opcion2").val()
          , 'idactor':$("#idactor").val()
          , 'idusuario':$("#idusuario").val()
          //, 'tpercampo':$("#tipoper").val()
          , 'papellido':$("#paterno").val()
          , 'sapellido':$("#materno").val()
          , 'pnombre':$("#pnombres").val()
          , 'snombre':$("#snombres").val()
  				//,	'razoncampo':$("#razonso").val()
          , 'tdoccampo':$("#tipodocumento").val()
          , 'codidenti':$("#nrodocumento").val()
          //, 'ruc':$("#ruc").val()
          //, 'empresa':$("#empresa").val()
          ,	'direccampo':$("#direccion").val()
          ,	'ubicampo':$("#ubigeo").val()
          ,	'telcampo':$("#telefono").val()
          , 'login':$("#usuario").val()
          , 'pass':$("#password").val()
          , 'estado':$("#estado").val()
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
                            if ($("#opcion").val()=="N")
                            {
                              if ($("#opcion2").val()=="S") {
                                mensajeview="Registro Exitoso!";
                              }

                            }else if($("#opcion").val()=="U"){
                              if ($("#opcion2").val()=="S") {
                                mensajeview="Registro actualizado correctamente!";
                              }
                            }else{
                              mensajeview="Registro eliminado correctamente!";
                            }
                            //bootbox.alert(mensajeview);
                            swal(mensajeview, "Clickea para continuar!", "success");
                            dispositivo.limpiar();
                            $('.bs-registro-modal-lg').modal('hide');
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
    ,limpiar:function(){
       $("#nrodocumento").val("");
       $("#paterno").val("");
       $("#materno").val("");
       $("#pnombres").val("");
       $("#snombres").val("");
       $("#direccion").val("");
       $("#telefono").val("");
       $("#usuario").val("");
       $("#password").val("");
    }
    ,disableedit:function(){
      $("#tipodocumento").attr('disabled','disabled');
      $("#nrodocumento").attr('readonly','readonly');
      $("#password").attr('readonly','readonly');
      //$(".natural").removeAttr('disabled');
    }
    ,validate:function(){}
    ,listar:function()
    {
        var wurl="<?php echo base_url('usuarios/list'); ?>";
        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: 'Id. Actor', name: 'idactor', key: true, width: 75 },
                    { label: 'COD', name: 'id', key: true, width: 75 },
                    { label: 'Usuario', name: 'login', width: 75 },
                    { label: 'Apellido Paterno', name: 'Apellido_Paterno', width: 150 },
                    { label: 'Apellido Materno', name: 'Apellido_Materno', width: 150 },
              			{ label: 'Nombre', name: 'PrimerNombre', width: 100 },
                    { label: 'Nombre', name: 'SegundoNombre', width: 100 },
              			{ label: 'Tipo Doc', name: 'TipoDocumento', width: 100 },
                    { label: 'Nro Doc', name: 'CodigoIdentificacion', width: 100 },
                    { label: 'Dirección', name: 'Direccion', width: 200 },
                    { label: 'Telefono', name: 'Telefono', width: 100 },
                    { label: 'Estado', name: 'codestado', width: 100 },
                ],
                viewrecords: true,
                height: 300,
                //width: "100%",
                //height: "100%",
                //caption: "Auto height example",
                rowNum: 100,
                ShrinkToFit: false,
                rownumbers: true,
                jsonReader: {
                  root: "rows",
                  repeatitems: false
                },
                gridview: true,
                gridComplete: function(){
                    dispositivo.mtd_event();
                },
                sortname: 'id',
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
              $("#tdatos").jqGrid('hideCol',['idactor','id']);
      }
   }

   dispositivo.init();

</script>
