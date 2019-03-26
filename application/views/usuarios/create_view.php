<div class="content-wrapper barra">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuario <?php echo '<label for="">'.$usuario.'</label>' ?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <!--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>-->
            <!--<li class="active">Here</li>-->
        </ol>
    </section>

    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title"><b>Preguntas</b></h3>
            </div>
            <div class="box-body">
                <form id="frmdata">
                <?php echo '<input type="hidden" name="opc" id="opc" value="'.$opc.'">'; ?>
                <?php echo '<input type="hidden" name="idusuario" id="idusuario" value="'.$usuario.'">'; ?>
                <input type="hidden" name="idopcion"  id="idopcion" value="">
                <input type="hidden" name="cod" id="cod" value="">

                <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                <div class="row">

                    <div class="col-sm-12">

                       <div class="form-group col-sm-5">
                            <div class="col-sm-3">
                              <label>Opción</label>
                            </div>
                            <div class="input-group input-group-sm col-sm-9">
                              <input type="text" name="opcion" class="form-control" id="opcion" value="" readonly>
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat new-modal" data-toggle="modal" data-target="#modal-opciones">...</button>
                                <!--<a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>-->
                              </span>
                            </div>

                        </div>
                        <div class="form-grup col-sm-2">
                          <button type="button" class="btn btn-success addopc" ><i class="fa fa-plus"></i></button>
                        </div>

                      </div>

                    </div>
                </form>

            <div class="btn-group pull-right" >
                <!--<button type="button" class="btn btn-success bguardar" ><i class="fa fa-save"></i> Guardar </button>
                <a href="</?php echo base_url() ?>alumno" class="btn btn-danger bcancelar"><i class="fa fa-mail-reply"></i> Regresar</a>-->
            </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="form-group col-sm-12">
                <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                            <div class="">
                                <table id="tdatos"> </table>
                                <div id="pager"></div>
                            </div>
              </div>
              <div class="btn-group pull-right" >
                  <button type="button" class="btn btn-danger bdeleteopc" ><i class="fa fa-trash"></i> Eliminar</button>
                  <a href="<?php echo base_url() ?>usuarios" class="btn btn-info bcancelar"><i class="fa fa-mail-reply"></i> Regresar</a>
              </div>
            </div>

    </div>

</section>

</div>

<!-- Modal -->
    <div class="modal fade" id="modal-opciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-xs" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Seleccionar Opción</h4>
                </div>

                <div class="modal-body">
                    <!-- form start -->
                    <!--INICIO DE FILA QUE CONTIENE LA COLUMNA-->
                    <div>
                        <table id="tdatosopc"> </table>
                        <div id="pageropc"></div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary btn_saveopc">Volver</button>
                </div>
            </div>
        </div>
    </div>

<script>
    var $grid = $("#tdatos"),
        newWidth = $grid.closest(".ui-jqgrid").parent().width();

    $.jgrid.defaults.width = newWidth;
    $.jgrid.defaults.responsive = true;
    $.jgrid.defaults.styleUI = 'Bootstrap';

</script>

<script type="text/javascript">
$(function () {
    var idgrilla="#tdatos";
    var idgrillaopc="#tdatosopc";
    var usuarios={
        init:function()
        {
            usuarios.event();
            usuarios.mtd_lista();
            usuarios.mtd_listaopc();
            //usuarios.validate();
        }
        ,event:function()
        {

            /*$(".bguardar").click(function(event)
            {
              event.returnValue = false; /*para I.E.
              if(event.preventDefault) event.preventDefault();
              $("#frmdata").submit();
            });*/

            $(".addopc").click(function(event)
            {
                event.returnValue = false; /*para I.E.*/
                if(event.preventDefault) event.preventDefault();
                if ($("#opcion").val().length > 0) {
                  $("#opc").val("N");
                  $("#cod").val("0");
                  usuarios.set_registrar($("#frmdata").submit());
                }else{
                  swal({
                    title: "Error!",
                    text: "No ha seleccionado una opcion",
                    type: "warning",
                  });
                    return false;
                }

            });

            $(".btn_saveopc").click(function(event)
            {
                event.returnValue = false; /*para I.E.*/
                if(event.preventDefault) event.preventDefault();
                var selr = jQuery(idgrillaopc).jqGrid('getGridParam', 'selrow');
                if(selr) {
                    var rowData = jQuery(idgrillaopc).jqGrid('getRowData', selr)
                    var widopciones = rowData.IdOpciones;
                    var wnombre = rowData.Nombre;

                    $("#idopcion").val(widopciones);
                    $("#opcion").val(wnombre);
                    $('#modal-opciones').modal('hide');

                }else {
                  swal({
                    title: "Error!",
                    text: "Debe seleccionar una opción",
                    type: "warning",
                  });
                    return false;
                }
            });

        }

        ,mtd_event:function()
        {

            /*$(".beditar").click(function(event)
            {
                event.returnValue = false; /*para I.E.
                if(event.preventDefault) event.preventDefault();
                $("#opc").val("U");
                $("#titleaction").text("Actualizar")
                var selr = jQuery(idgrilla).jqGrid('getGridParam', 'selrow');
                if(selr) {
                    var rowData = jQuery(idgrilla).jqGrid('getRowData', selr)
                    var wcodigo = rowData.IdEncuesta;
                    var wtitulo = rowData.Titulo;
                    var wdescripcion = rowData.Descripcion;
                    var wcomentarioh = rowData.Comentario_head;
                    var wcomentariof = rowData.Comentario_footer;

                    $("#cod").val(wcodigo);
                    $("#titulo").val(wtitulo);
                    $("#descripcion").val(wdescripcion);
                    $("#head").val(wcomentarioh);
                    $("#footer").val(wcomentarioh);
                    $('#myModal').modal('show');

                }else {
                    bootbox.alert({
                        message: "Debe de Selecionar un registro",
                        size: 'small'
                    });
                    return false;
                }
            });*/

            $(".bdeleteopc").click(function(event)
                {
                    event.returnValue = false; /*para I.E.*/
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
                });

            /*$(".btn_save").click(function(event)
            {
                event.returnValue = false; /*para I.E.
                if(event.preventDefault) event.preventDefault();
                $("#frmdata").submit();
            });*/


        }

        ,mtd_lista:function()
        {
          var iduser =   $("#idusuario").val();
          var wurl="<?php echo base_url(); ?>" + "Usuarios/listaopcuser";
          $(idgrilla).jqGrid({
                    url: wurl,
                    mtype: "GET",
                    styleUI : 'Bootstrap',
                    responsive: true,
                    postData: {'token':$('input[name=token]').val(),'idusuario':iduser},
                    datatype: "json",
                    colModel: [
                        { label: 'CÓDIGO', name: 'IdOpciones', key: true, width: 100 },
                        { label: 'MENÚ', name: 'Nombre', width: 200 },
                        { label: 'ACTOR', name: 'idactor', width: 100 },
                        { label: 'LOGIN', name: 'login', width: 100 },
                        { label: 'USUARIO', name: 'usuario', width:200 }
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
                    sortname: 'IdOpciones',
                    sortorder: 'asc',
                    pager: "#pager",
                    gridComplete: function(){
                      usuarios.mtd_event();
                    }
            });

          jQuery(idgrilla).jqGrid('navGrid','#pager',
          {edit:false,add:false,del:false,view:true},
          {},
          {},
          {},
          {multipleSearch:true, multipleGroup:false, showQuery: true}
          );

           $(idgrilla).jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
           $(idgrilla).jqGrid('hideCol',['Parent','TipoVineta', 'Orden', 'NroLineas']);
        }

        ,mtd_listaopc:function()
        {
          var wurl="<?php echo base_url(); ?>" + "Usuarios/listaopcion";
          $(idgrillaopc).jqGrid({
                    url: wurl,
                    mtype: "GET",
                    styleUI : 'Bootstrap',
                    responsive: true,
                    postData: {'token':$('input[name=token]').val()},
                    datatype: "json",
                    colModel: [
                        { label: 'CÓDIGO', name: 'IdOpciones', key: true, width: 100 },
                        { label: 'MENÚ', name: 'Nombre', width: 200 }
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
                    sortname: 'IdOpciones',
                    sortorder: 'asc',
                    pager: "#pageropc",
                    gridComplete: function(){
                      //usuarios.mtd_event();
                    }
            });

          jQuery(idgrillaopc).jqGrid('navGrid','#pageropc',
          {edit:false,add:false,del:false,view:true},
          {},
          {},
          {},
          {multipleSearch:true, multipleGroup:false, showQuery: true}
          );

           $(idgrillaopc).jqGrid('filterToolbar', { stringResult: true, searchOnEnter: true });
           $(idgrillaopc).jqGrid('hideCol',['Parent','TipoVineta', 'Orden', 'NroLineas']);
        }
        ,set_registrar:function(form)
        {
          var wurl="<?php echo base_url(); ?>" + "Usuarios/set_opcion";
          $.ajax({
                   async: true,
                   url: wurl,
                   type: "post",
                   dataType: 'json',
                   contentType: 'application/x-www-form-urlencoded',
                   data:$(form).serialize()
                   ,beforeSend: function(data){
                    waitingDialog.show('Procesando...', {dialogSize: 'sm'});
                   },
                   complete: function(data, status){
                      if (status=="success"){
                        var werror=JSON.parse(data.responseText).error;
                        var wmsg=JSON.parse(data.responseText).msg;
                        var wcodigo=JSON.parse(data.responseText).codigo;
                        if (werror==0)
                        {
                          waitingDialog.hide();
                          bootbox.alert("El realizo la acción exitosamente, Nro de Reg." + wcodigo );
                         $(idgrilla).trigger( 'reloadGrid' );
                        }
                        else
                        {
                          waitingDialog.hide();
                          bootbox.alert("Problema al guardar. " + wmsg);
                        }
                      }
                      else
                      {
                        waitingDialog.hide();
                        bootbox.alert("Problema al guardar");
                      }
                   }
               });
        }

    }
    usuarios.init();
 });
</script>
