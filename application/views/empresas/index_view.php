<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <a class="btn btn-primary btn-xs new-modal" data-toggle="modal" id="btnNuevo"><span class="fa fa-plus"></span></a>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Mantenimiento</a></li>
      <li class="active">Empresa</li>
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

<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Datos de la Empresa</h4>
        <small id="infoemp" class="form-text text-muted">Informacion Basica de la empresa.</small>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <form action="" class="form" method="post" accept-charset="utf-8">
              <?php echo form_hidden('token', $token) ?>
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

                  <div class="box-body">

                      <div class="form-group col-sm-4" hidden>
                        <label for="txttipm" class="control-label">Tipo Mant</label>
                        <input type="text" name="txttipm" class="form-control" id="txttipm" placeholder="">
                      </div>

                      <div class="fprm-group col-sm-4" hidden>
                        <label for="idempresa" class="control-label">id</label>
                        <input type="text" name="idempresa" class="form-control" id="idempresa" placeholder="">
                      </div>

                    <div class="form-group col-sm-4">
                        <label for="txtruc" class="control-label">RUC*</label>
                        <input type="text" name="txtruc" class="form-control input-sm" id="txtruc" placeholder="escriba su ruc">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="razonsocial" class="control-label">Razon Social*</label>
                        <input type="text" name="razonsocial" class="form-control input-sm" id="razonsocial" placeholder="su razon social">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="nombrecomercial" class="control-label">Nombre Comercial*</label>
                        <input type="text" name="nombrecomercial" class="form-control input-sm" id="nombrecomercial" placeholder="escriba su nombre comercial">
                    </div>

                  </div>

                </div>

                </div>

                    <div class="box border-top-solid">

                      <div class="box-body my-form-body col-sm-6">

                        <div class="modal-header">
                          <h4 class="modal-title">Ubicaciones y Referencias</h4>
                          <small id="infoemp" class="form-text text-muted">Informacion de direccion, ubigeo, teléfonos.</small>
                        </div>

                            <div class="form-group">
                              <label for="direccion" class="col-sm-3 control-label">Direccion*</label>
                              <div class="col-sm-9">
                                <input type="text" name="direccion" class="form-control input-sm" id="direccion" placeholder="escriba su direccion">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <label for="ubigeo" class="col-sm-3 control-label">Ubigeo*</label>
                              <div class="col-sm-9">
                                <input type="text" name="ubigeo" class="form-control input-sm" id="ubigeo" placeholder="">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <label for="ubigeo" class="col-sm-3 control-label">tel/Cel*</label>
                              <div class="col-sm-4">
                                <input type="text" name="tel" class="form-control input-sm" id="tel" placeholder="">
                              </div>
                              <div class="col-sm-5">
                                <input type="text" name="cel" class="form-control input-sm" id="cel" placeholder="">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <label for="representante" class="col-sm-3 control-label">Representante*</label>
                              <div class="col-sm-9">
                                <input type="text" name="representante" class="form-control input-sm" id="representante" placeholder="">
                              </div>
                            </div>

                      </div>

                      <div class="box-body my-form-body col-sm-6">
                        <div class="modal-header">
                          <h4 class="modal-title">Logo</h4>
                          <small id="infolog" class="form-text text-muted">La imagen debe de ser de 500x500 pixeles en formato png o jpg.</small>
                        </div>
                        <div class="form-group">
                            <div class="file-field big">
                              <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                                  <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                  <input type="file" id="uploadImage" onchange="PreviewImage()" multiple>
                              </a>
                              <div class="form-group col-sm-12">
                                <img src="#" alt="your image" id="uploadPreview" height="200" width="auto">
                              </div>

                            </div>
                        </div>

                      </div>
                      <!-- /.box-body -->
                  </div>

                  </form>
                </div>


            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
             <button type="button" id="btnguardar" name="btnguardar" class="btn btn-primary">Guardar</button>
          </div>
        </div>
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
    $("#idempresa").val(0)
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
                  $("#idempresa").val(rowData.IdEmpresa);
                  //$("#txtmodelo").val(rowData.IdCategoria).trigger('change');
                  //$("#txtmarca").val(rowData.CodigoReferencia);
                  //$("#fileimg").val(rowData.CodigoTipo).trigger('change');

                  swal({
                    title: "Mantenimiento/empresa",
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
          var wurl="<?php echo base_url('empresas/listid'); ?>";

          $.ajax({
            async: true,
            url: wurl,
            type: "post",
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data://$("#frm-clientes").serialize(),
            {
              'idempresa':strA_valor
            },
            beforeSend: function(data){

            },
            complete: function(data, status){

              var json = JSON.parse(data.responseText);

                //  alert( json[0].Apellido_Paterno );
                $("#idempresa").val( json[0].IdEmpresa );
                $("#txtruc").val( json[0].Ruc );
                $("#razonsocial").val( json[0].RazonSocial );
                $("#nombrecomercial").val( json[0].NombreComercial );
                $("#representante").val( json[0].Representante );
                $("#direccion").val( json[0].Direccion );
                $("#ubigeo").val( json[0].Ubigeo );
                $("#tel").val( json[0].Telefono );
                $("#cel").val( json[0].Celular );
              }
          });

      //alert(strA_valor);
        $("#txttipm").val('U');
        $('#modal-default').modal('show');
    }
    ,guardar:function()
      {
      var wurl="<?php echo base_url('empresas/store'); ?>";

      $.ajax({
        async: true,
        url: wurl,
        type: "post",
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        data://$("#frm-clientes").serialize(),
        {
          'idempresa':$("#idempresa").val()
        , 'ruc':$("#txtruc").val()
        , 'razonsocial':$("#razonsocial").val()
        , 'nombrecomercial':$("#nombrecomercial").val()
        , 'rutalogo':$("#uploadImage").val()
        ,'direccion':$("#direccion").val()
        ,'ubigeo':$("#ubigeo").val()
        ,'tel':$("#tel").val()
        ,'cel':$("#cel").val()
        , 'representante':$("#representante").val()
        , 'opcion':$("#txttipm").val()
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
        var wurl="<?php echo base_url('empresas/list'); ?>";
           $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" onclick="dispositivo.some_function('+rowObject.IdEmpresa+')"><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.IdEmpresa + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Ide. Empresa', name: 'IdEmpresa', key: true, width: 75 },
                    { label: 'RUC', name: 'RUC', width: 100 },
                    { label: 'Razon Social', name: 'RazonSocial', width: 200 },
              			{ lfabel: 'NombreComercial', name: 'NombreComercial', width: 300 },
              			{ label: 'Representante', name: 'Representante', width: 300 },
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
                sortname: 'IdEmpresa',
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

 <script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
