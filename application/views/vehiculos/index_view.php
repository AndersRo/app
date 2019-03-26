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
      <li class="active">Vehiculos</li>
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
        <h4 class="modal-title">Nuevo Vehiculo</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

                  <form action="" class="form-vehiculos" method="post" accept-charset="utf-8">
                  <?php echo form_hidden('token', $token) ?>

                  <div class="form-group" hidden>
                    <div class="col-sm-4">
                      <label for="txttipm" class="control-label">Tipo Mant</label>
                      <input type="text" name="txttipm" class="form-control" id="txttipm" placeholder="">
                    </div>
                  </div>

                  <div class="form-group" hidden>
                    <div class="col-sm-4">
                      <label for="idvehiculo" class="control-label">id</label>
                      <input type="text" name="idvehiculo" class="form-control" id="idvehiculo" placeholder="">
                    </div>
                  </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="txtplaca" class="control-label">Placa</label>
                        <input type="text" name="txtplaca" class="form-control" id="txtplaca" placeholder="Ingrese la placa">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="txtchasis" class="control-label">Chasis</label>
                        <input type="text" name="txtchasis" class="form-control" id="txtchasis" placeholder="escriba el chasis">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="txtmotor" class="control-label">Motor</label>
                        <input type="text" name="txtmotor" class="form-control" id="txtmotor" placeholder="escriba la serie del motor">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="txtmarca" class="control-label">Marca</label>
                        <input type="text" name="txtmarca" class="form-control" id="txtmarca" placeholder="escriba la marca">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="txtmodelo" class="control-label">Modelo</label>
                        <input type="text" name="txtmodelo" class="form-control" id="txtmodelo" placeholder="escriba el modelo">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="txtcolor" class="control-label">Color</label>
                        <input type="text" name="txtcolor" class="form-control" id="txtcolor" placeholder="ingrese color">
                      </div>
                    </div>

                    <div class="box-body my-form-body col-sm-6">
                      <div class="modal-header">
                        <h4 class="modal-title">Ruta Referencia</h4>
                        <small id="infolog" class="form-text text-muted">La imagen debe de ser de 500x500 pixeles en formato png o jpg.</small>
                      </div>
                      <div class="form-group">
                          <div class="file-field big">
                            <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                                <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                <input type="file" name="uploadImage" id="uploadImage" onchange="PreviewImage()" multiple>
                            </a>
                            <div class="form-group col-sm-12">
                              <img src="#" alt="your image" name="uploadImage" id="uploadPreview" height="200" width="auto">
                            </div>

                          </div>
                      </div>

                    </div>

                    <div class="box-body my-form-body col-sm-6">
                      <div class="modal-header">
                        <h4 class="modal-title">Ruta Tarjeta</h4>
                        <small id="infolog" class="form-text text-muted">La imagen debe de ser de 500x500 pixeles en formato png o jpg.</small>
                      </div>
                      <div class="form-group">
                          <div class="file-field big">
                            <a class="btn-floating btn-lg amber darken-2 mt-0 float-left">
                                <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                <input type="file" name="uploadImage1" id="uploadImage1" onchange="PreviewImage1()" multiple>
                            </a>
                            <div class="form-group col-sm-12">
                              <img src="#" alt="your image" name="uploadPreview1" id="uploadPreview1" height="200" width="auto">
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnguardar" name="btnguardar" class="btn btn-primary">Guardar</button>
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
    $("#idvehiculo").val(0);
    dispositivo.limpiar();
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
    ,eventgrid:function(){

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
                  $("#idvehiculo").val(rowData.IdVehiculo);
                  //$("#txtmodelo").val(rowData.IdCategoria).trigger('change');
                  //$("#txtmarca").val(rowData.CodigoReferencia);
                  //$("#fileimg").val(rowData.CodigoTipo).trigger('change');

                  swal({
                    title: "Mantenimiento/Vehiculo",
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
    ,limpiar:function(){
      $("#txtplaca").val("");
      $("#txtchasis").val("");
      $("#txtmotor").val("");
      $("#txtmarca").val("");
      $("#txtmodelo").val("");
      $("#txtcolor").val("");
      $("#uploadImage").val("");
      $("#uploadImage1").val("");
    }
    ,some_function:function(strA_valor)
    {

          var wurl="<?php echo base_url('vehiculos/listid'); ?>";

          $.ajax({
            async: true,
            url: wurl,
            type: "post",
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data://$("#frm-clientes").serialize(),
            {
              'idvehiculo':strA_valor
            },
            beforeSend: function(data){

            },
            complete: function(data, status){

              var json = JSON.parse(data.responseText);

                //  alert( json[0].Apellido_Paterno );
                $("#idvehiculo").val( json[0].IdVehiculo );
                $("#txtplaca").val( json[0].Placa );
                $("#txtchasis").val( json[0].Chasis );
                $("#txtmotor").val( json[0].Motor );
                $("#txtmodelo").val( json[0].Modelo );
                $("#txtcolor").val( json[0].Color );
                $("#txtmarca").val( json[0].Marca );

              }
          });

      //alert(strA_valor);
        $("#txttipm").val('U');
        $('#modal-default').modal('show');
    }
    ,guardar:function(){

      var wurl="<?php echo base_url('vehiculos/store'); ?>";

		  $.ajax({
				async: true,
				url: wurl,
				type: "post",
				dataType: 'json',
				contentType: 'application/x-www-form-urlencoded',
				data:$(".form-vehiculos").serialize()
				/*{
					'placa':$("#txtplaca").val()
				,	'chasis':$("#txtchasis").val()
        , 'motor':$("#txtmotor").val()
        , 'modelo':$("#txtmodelo").val()
        , 'color':$("#txtcolor").val()
        , 'rutaref':$("#txtrutaref").val()
        , 'rutatarjeta':$("#txtrutatar").val()
        , 'idempresa':$("idempresa").val()
      },*/
				,beforeSend: function(data){
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
                          dispositivo.limpiar();
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
        var wurl="<?php echo base_url('vehiculos/list'); ?>";
        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" onclick="dispositivo.some_function('+rowObject.IdVehiculo+')"><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.IdVehiculo + '><span class="fa fa-trash-o"></span></button>';}},
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
                    //sucursal.eventload();
                    dispositivo.eventgrid();
                },
                sortname: 'idvehiculo',
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

<script type="text/javascript">

   function PreviewImage1() {
       var oFReader = new FileReader();
       oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);

       oFReader.onload = function (oFREvent) {
           document.getElementById("uploadPreview1").src = oFREvent.target.result;
       };
   };

</script>
