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

<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nuevo Comando </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box border-top-solid">
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body my-form-body">

                  <form action="" class="form" method="post" accept-charset="utf-8">
                  <?php echo form_hidden('token', $token) ?>

                  <div class="form-group">
                    <label for="txttipm" class="col-sm-12 control-label">Tipo Mant</label>

                    <div class="col-sm-6">
                      <input type="text" name="txttipm" class="form-control" id="txttipm" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="idtaller" class="col-sm-12 control-label">Id</label>

                    <div class="col-sm-6">
                      <input type="text" name="idtaller" class="form-control" id="idtaller" placeholder="id">
                    </div>
                  </div>

                    <div class="form-group">
                      <label for="descripcion" class="col-sm-12 control-label">Descripcion</label>

                      <div class="col-sm-6">
                        <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="ingrese un taller">
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
        <button type="button" class="btn btn-primary" id="btnguardar">Guardar</button>
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
    $("#idtaller").val(0)
    $('#modal-default').modal('show');
  });
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
    ,some_function:function(strA_valor)
    {

          var wurl="<?php echo base_url('talleres/listid'); ?>";

          $.ajax({
            async: true,
            url: wurl,
            type: "post",
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data://$("#frm-clientes").serialize(),
            {
              'idtaller':strA_valor
            },
            beforeSend: function(data){

            },
            complete: function(data, status){

              var json = JSON.parse(data.responseText);

                //  alert( json[0].Apellido_Paterno );
                $("#idtaller").val( json[0].IdTaller );
                $("#descripcion").val( json[0].Descripcion );

              }
          });

      //alert(strA_valor);
        $("#txttipm").val('U');
        $('#modal-default').modal('show');
    }

    ,guardar:function(){
      var wurl="<?php echo base_url('talleres/store'); ?>";

		  $.ajax({
				async: true,
				url: wurl,
				type: "post",
				dataType: 'json',
        postData: {'token':$('input[name=token]').val()},
				contentType: 'application/x-www-form-urlencoded',
				data://$("#frm-clientes").serialize(),
				{

          'idtaller':$("#idtaller").val()
					,'tallercampo':$("#descripcion").val()
          ,'opcion':$("#txttipm").val()
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
        var wurl="<?php echo base_url('talleres/list'); ?>";
        $("#tdatos").jqGrid({
                url: wurl,
                mtype: "get",
                styleUI : 'Bootstrap',
                responsive: true,
                postData: {'token':$('input[name=token]').val()},
                datatype: "json",
                colModel: [
                    { label: '...', name: 'accion', frozen:true , width: 80, formatter:function(cellValue, opts, rowObject){return '<button class="btn btn-success btn-xs edit-modal" onclick="dispositivo.some_function('+rowObject.IdTaller+')"><span class="fa fa-pencil"></span></button> <button class="btn btn-danger btn-xs delete-modal" data-id=' + rowObject.idsucursal + '><span class="fa fa-trash-o"></span></button>';}},
                    { label: 'Id. Taller', name: 'IdTaller', key: true, width: 100 },
                    { label: 'Descripcion', name: 'Descripcion', key: true, width: 100 },
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
                sortname: 'IdTaller',
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
