<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $titulo; ?>
      <a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span></a>
	  <a class="btn btn-primary btn-xs new-modal" data-toggle="modal" data-target="#pepe"><span class="fa fa-plus"></span></a>
      <a class="btn btn-danger"  data-toggle="modal" data-target="#josemanuel"><span class="fa fa-car"></span></a>
	 <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

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
<div class="modal fade" id="pepe">
<div class="modal-dialog modal-lg">
<div class="modal-content">

		<div class="modal-header">
          <h1>header</h1>      
        </div>
		
		 <div class="modal-body">
          <h1>body</h1>      
		</div>
		  
		   <div class="modal-footer">
		   <h1>footer</h1>
          </div>
		  
		  
</div>
</div>
</div>
<div class="modal fade" id="josemanuel">
<div class="modal-dialog modal-lg">
<div class="modal-content">

		<div class="modal-header">
          <h1>jose manuel</h1>      
        </div>
		
		 <div class="modal-body">
          <h1>fajardo gutierrez</h1>    
           <div class="form-group">
			<label for="exampleInputEmail1">Marca</label>
			<input type="email" class="form-control" id="txtmarca" aria-describedby="emailHelp" placeholder="escribir marca">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>		  
  <div class="form-group">
    <label for="exampleInputEmail1">Modelo</label>
    <input type="email" class="form-control" id="txtmodelo" aria-describedby="emailHelp" placeholder="escribir modelo">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>		 
		</div>
		  
		   <div class="modal-footer">
		   <h1>footer</h1>
          <button type="button" id="btnguardar"  name="btnguardar" class="btn btn-warning">Guardar</button>
		  </div>
		  
		  
		  
</div>
</div>
</div>

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

                    <div class="form-group">
                      <label for="codigo" class="col-sm-2 control-label">Codigosss</label>

                      <div class="col-sm-4">
                        <input type="text" name="codigo" class="form-control" id="codigo" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="role" class="col-sm-2 control-label">Tipo Documento</label>

                      <div class="col-sm-4">
                        <select name="group" class="form-control">
                          <?php
                              foreach ($tipodocumento as $key => $value) {
                                  echo '<option value="'.$value["codigo"].'">'.$value["descripcion"].'</option>';
                              }

                           ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="CodigoIdentificacion" class="col-sm-2 control-label">Nro. Documento</label>

                      <div class="col-sm-4">
                        <input type="text" name="CodigoIdentificacion" class="form-control" id="CodigoIdentificacion" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="lastname" class="col-sm-2 control-label">Primer Apellido</label>

                      <div class="col-sm-4">
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="lastname1" class="col-sm-2 control-label">Segundo Apellido</label>

                      <div class="col-sm-4">
                        <input type="text" name="lastname1" class="form-control" id="lastname1" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="firstname" class="col-sm-2 control-label">Primer Nombre</label>

                      <div class="col-sm-4">
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="firstname2" class="col-sm-2 control-label">Segundo Nombre</label>

                      <div class="col-sm-4">
                        <input type="text" name="firstname2" class="form-control" id="firstname2" placeholder="">
                      </div>
                    </div>

                    <div class="form-group" hidden>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
      dispositivo.event();
      dispositivo.validate();
      dispositivo.listar();
	    
		$( "#btnguardar" ).on( "click", function() {
		dispositivo.guardar();
	  
		});
    }
    ,event:function()  {}
    ,validate:function(){}
	,guardar:function()
	{
		

		  var wurl="<?php echo base_url('clientes/guardar'); ?>";
		
		  $.ajax({
				async: true,
				url: wurl,
				type: "post",
				dataType: 'json',  
				contentType: 'application/x-www-form-urlencoded', 
				data://$("#frm-clientes").serialize(),
				{
					'marcacampo':$("#txtmarca").val()
				,	'modelocampo':$("#txtmodelo").val()
				},
				beforeSend: function(data){  
					 
				},
				complete: function(data, status){                          
					alert('completado');
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
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" data-id=' + rowObject.IdCliente + '><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Ide. Cliente', name: 'IdCliente', key: true, width: 75 },
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
                sortname: 'idcliente',
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
              $("#tdatos").jqGrid('hideCol',['IdActor']);
      }
   }

   dispositivo.init();

</script>
