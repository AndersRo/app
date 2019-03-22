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
      <li class="active">Cliente</li>
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
        <h4 class="modal-title">Registrar </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

                  <form action="" class="" role="form" method="post" accept-charset="utf-8">
                  <?php echo form_hidden('token', $token) ?>


                  <div class="form-group" hidden>
                    <label for="txttipm" class="col-sm-2 control-label">Tipo Mant</label>

                    <div class="col-sm-4">
                      <input type="text" name="txttipm" class="form-control" id="txttipm" placeholder="">
                    </div>
                  </div>

                  <div class="form-group" hidden>
                    <label for="txtcli" class="col-sm-2 control-label">Cliente</label>

                    <div class="col-sm-4">
                      <input type="text" name="txtcli" class="form-control" id="txtcli" placeholder="">
                    </div>
                  </div>

                  <div class="form-group" hidden>
                    <label for="idactor" class="col-sm-2 control-label">id actor</label>

                    <div class="col-sm-4">
                      <input type="text" name="idactor" class="form-control" id="idactor" placeholder="">
                    </div>
                  </div>

                    <div class="form-group">
                      <label for="role" class="col-sm-2 control-label">Tipo Persona</label>

                      <div class="col-sm-4">
                        <select name="tipoper" id="tipoper" class="form-control">
                          <?php
                              foreach ($tipopersonas as $row) {
                                  echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                              }

                           ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="role" class="col-sm-2 control-label">Tipo Documento</label>

                      <div class="col-sm-4">
                        <select name="tipodoc" id="tipodoc" class="form-control" disabled>
                          <?php
                              foreach ($tipodocumento as $row) {
                                  echo '<option value="'.$row->codigo.'">'.$row->Descripcion.'</option>';
                              }
                           ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group" id="cruc" hidden>
                      <label for="ruc" class="col-sm-2 control-label">RUC</label>

                      <div class="col-sm-4">
                        <input type="text" name="ruc" class="form-control" id="ruc" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="CodigoIdentificacion" class="col-sm-2 control-label">Nro. Documento</label>

                      <div class="col-sm-4">
                        <input type="text" name="CodigoIdentificacion" class="form-control" id="CodigoIdentificacion" placeholder="">
                      </div>
                    </div>

                    <div class="form-group" id="glastname">
                      <label for="lastname" class="col-sm-2 control-label">Primer Apellido</label>

                      <div class="col-sm-4">
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                      </div>
                    </div>

                    <div class="form-group" id="glastname1">
                      <label for="lastname1" class="col-sm-2 control-label">Segundo Apellido</label>

                      <div class="col-sm-4">
                        <input type="text" name="lastname1" class="form-control" id="lastname1" placeholder="">
                      </div>
                    </div>

                    <div class="form-group" id="gfirstname">
                      <label for="firstname" class="col-sm-2 control-label">Primer Nombre</label>

                      <div class="col-sm-4">
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="">
                      </div>
                    </div>

                    <div class="form-group" id="gfirstname1">
                      <label for="firstname2" class="col-sm-2 control-label">Segundo Nombre</label>

                      <div class="col-sm-4">
                        <input type="text" name="firstname2" class="form-control" id="firstname1" placeholder="">
                      </div>
                    </div>

                    <div class="form-group" id="razonsoc">
                      <label for="razonso" class="col-sm-2 control-label">Razon Social</label>

                      <div class="col-sm-4">
                        <input type="text" name="razonso" class="form-control" id="razonso" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="telefono" class="col-sm-2 control-label">Telefono</label>

                      <div class="col-sm-4">
                        <input type="text" name="telefono" class="form-control" id="telefono" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="direccion" class="col-sm-2 control-label">Direccion</label>

                      <div class="col-sm-4">
                        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ubigeo" class="col-sm-2 control-label">Ubigeo</label>

                      <div class="col-sm-4">
                        <input type="text" name="ubigeo" class="form-control" id="ubigeo" placeholder="">
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
        <button type="button" class="btn btn-primary" id="btnguardar" name="btnguardar">Guardar</button>
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
    $("#txtcli").val('C');
    $("#idactor").val(0);
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
      dispositivo.seleccion();
      dispositivo.personas();
    //  dispositivo.some_function('');

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
                  $("#txtcli").val('C');
                  var idrow=$(this).data('id');
                  $("#tdatos").jqGrid('setSelection',idrow, false);
                  var selr = $("#tdatos").jqGrid('getGridParam', 'selrow');
                  var rowData = $("#tdatos").jqGrid('getRowData', selr)

                  //console.log(rowData);
                  //alert(rowData.IdModelo);
                  //Cargando los Tipos
                  $("#idactor").val(rowData.IdActor);
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
                      //swal("Eliminado!", "Su registro ha sido eliminado!", "success");
                          //producto.setproductos($("#frm-registro"));
                  }
                );
                  /*bootbox.confirm({
                      title: "Modelo",
                      message: "¿Esta seguro de Eliminar este registro?",
                      buttons: {
                          cancel: {
                              label: '<i class="fa fa-times"></i> Cancelar'
                          },
                          confirm: {
                              label: '<i class="fa fa-check"></i> Confirmar',
                              className: 'btn-success'
                          }
                      },
                      callback: function (result) {
                          if (result)
                          dispositivo.guardar();
                              //producto.setproductos($("#frm-registro"));
                      }
                  });*/
              });
    }
    ,validate:function(){}
    ,limpiar(){
      $("#ruc").val();
      $("#CodigoIdentificacion").val();
      $("#lastname").val();
      $("#lastname1").val();
      $("#firstname").val();
      $("#firstname1").val();
      $("#razonso").val();
      $("#telefono").val();
      $("#direccion").val();
      $("#ubigeo").val();
    }
    ,some_function:function(strA_valor)
    {
          var wurl="<?php echo base_url('clientes/listgg'); ?>";

          $.ajax({
            async: true,
            url: wurl,
            type: "post",
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data://$("#frm-clientes").serialize(),
            {
              'idactor':strA_valor
            },
            beforeSend: function(data){

            },
            complete: function(data, status){

              var json = JSON.parse(data.responseText);

                //  alert( json[0].Apellido_Paterno );

                $("#idactor").val( json[0].IdActor );
                $("#lastname").val( json[0].Apellido_Paterno );
                $("#lastname1").val( json[0].Apellido_Materno );
                $("#firstname").val( json[0].PrimerNombre );
                $("#firstname1").val( json[0].SegundoNombre );
                $("#razonso").val( json[0].RazonSocial );
                $("#CodigoIdentificacion").val( json[0].CodigoIdentificacion );
                $("#ruc").val( json[0].Ruc );
                $("#empresa").val( json[0].IdEmpresa );
                if (json[0].TipoPersona == "003005") {
                  $("#tipoper").val("003005").trigger('change');
                  $("#tipodoc").val("002003").trigger('change');
                  $("#tipodoc").attr('disabled','disabled');
                  $("#razonsoc").hide();
                  $("#glastname").show();
                  $("#glastname1").show();
                  $("#gfirstname").show();
                  $("#gfirstname1").show();
                } else if(json[0].TipoPersona == "003006"){
                  $("#tipoper").val("003006");
                  dispositivo.personas();
                  $("#tipodoc").val("002004").trigger('change');
                  $("#tipodoc").val("002004").trigger('change');
                  $("#tipodoc").attr("disabled", "disabled");
                  $("#razonsoc").show();
                  $("#glastname").hide();
                  $("#glastname1").hide();
                  $("#gfirstname").hide();
                  $("#gfirstname1").hide();
                }

                //$("#empresa").val( json[0].IdEmpresa)
                $("#direccion").val( json[0].Direccion );
                $("#telefono").val( json[0].Telefono );
                $("#ubigeo").val( json[0].Ubigeo );
              //var yourData = json.Data; // or json["Data"]
                    //alert(JSON.stringify(data.responseText));
                    /*$.each(json[0], function(i, item) {
                        alert(item);
                    });
                    */
              }
          });

      //alert(strA_valor);
        $("#txttipm").val('U');
        $("#txtcli").val('C');
        $('#modal-default').modal('show');
    }
    ,personas:function(){
      $("#tipoper").on('change', function(){
        var selectValue = $(this).val();
        switch (selectValue) {
          case "003005":
            $("#tipodoc").val("002003").trigger('change');
            $("#tipodoc").attr('disabled','disabled');
            $("#cruc").hide();
            $("#razonsoc").hide();
            $("#glastname").show();
            $("#glastname1").show();
            $("#gfirstname").show();
            $("#gfirstname1").show();
            break;
          case "003006":
              $("#tipodoc").val("002004").trigger('change');
              $("#tipodoc").attr("disabled", "disabled");
              $("#cruc").show();
              $("#razonsoc").show();
              $("#glastname").hide();
              $("#glastname1").hide();
              $("#gfirstname").hide();
              $("#gfirstname1").hide();
            break;
          default:

        }
      })
    }
    ,seleccion:function(){
      /*var opt = $('#tipodoc').val();
      if (opt=="002003") {
        $('#razonsoc').hide();
      }else{
        $('#razonsoc').show();
      }*/

      $("#tipodoc").on('change', function() {

          var selectValue = $(this).val();
          switch (selectValue) {

           case "002003":
             $("#razonsoc").hide();
             $("#glastname").show();
             $("#glastname1").show();
             $("#gfirstname").show();
             $("#gfirstname1").show();
             break;

           case "002004":
             $("#razonsoc").show();
             $("#glastname").hide();
             $("#glastname1").hide();
             $("#gfirstname").hide();
             $("#gfirstname1").hide();
             break;

           }

         }).change();

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
          'opcion1':$("#txttipm").val()
        , 'opcion2':$("#txtcli").val()
        , 'idactor':$("#idactor").val()
        , 'tpercampo':$("#tipoper").val()
        , 'papellido':$("#lastname").val()
        , 'sapellido':$("#lastname1").val()
        , 'pnombre':$("#firstname").val()
        , 'snombre':$("#firstname1").val()
				,	'razoncampo':$("#razonso").val()
        , 'tdoccampo':$("#tipodoc").val()
        , 'codidenti':$("#CodigoIdentificacion").val()
        , 'ruc':$("#ruc").val()
        ,	'direccampo':$("#direccion").val()
        ,	'ubicampo':$("#ubigeo").val()
        ,	'telcampo':$("#telefono").val()
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
        var wurl="<?php echo base_url('clientes/list'); ?>";
        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" onclick="dispositivo.some_function('+rowObject.IdActor+')"><span class="fa fa-pencil" ></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.IdActor + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Ide. Cliente', name: 'IdCliente', width: 75 /*formatter:function (cellvalue, options, rowObject) {
    return "<input type='button' class='btn btn-success btn-xs edit-modal' value='somevalue' onclick='dispositivo.some_function("+rowObject.IdActor+")'\>";
}*/ },
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
                sortname: 'idcliente',
                sortorder: 'desc',
                pager: "#pager",
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
              $("#tdatos").jqGrid('hideCol',['IdActor','TipoDocumento']);
      }
   }

   dispositivo.init();

</script>
