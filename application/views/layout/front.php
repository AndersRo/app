<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Grupo | ARIFE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/sweetalert.css">

  <!---<link rel="stylesheet" href="<//?php echo base_url();?>assets/dist/css/sweetalert2.min.css">-->
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jqgrid/ui.jqgrid-bootstrap.css">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>

  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

  <script src="<?php echo base_url();?>assets/plugins/jqgrid/grid.locale-es.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/jqgrid/jquery.jqGrid.js"></script>

  <script src="<?php echo base_url();?>assets/dist/js/waitingfor.js"></script>
  <script src="<?php echo base_url();?>assets/dist/js/bootbox.min.js"></script>

  <script src="<?php echo base_url();?>assets/dist/js/sweetalert.min.js"></script>
    <!--Bootstrap Select -->
  <script src="<?php echo base_url();?>assets/dist/js/bootstrap-select.min.js"></script>

  <script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/bower_components/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <!-- InputCounter -->
  <script src="<?php echo base_url();?>assets/plugins/Number-InputCounter/dist/js/jquery.input-counter.min.js"></script>
  <!-- InputMask -->
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
      if($header) echo $header;
      if($left) echo $left;
      if($middle) echo $middle;
      if($footer) echo $footer;
      if($controlsidebar) echo $controlsidebar;
    ?>
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
</body>

</html>

  <script type="text/javascript">
    $(function () {
        var url=window.location
        $('.treeview a').each(function(e){
            var link = $(this).attr('href');
            if(link==url){
                //$(this).parent('li').parent('li').addClass('active');
                //$(this).parent('li').addClass('active');
                $(this).parents('li').addClass('active');
                //$(this).closest('.treeview').addClass('active');
            }
        });
      });

  </script>

  <script type="text/javascript">

  $(document).on("ready",inicio);
  function inicio(){
    $("form").submit(function (event){
      event.preventDefault();

      $.ajax({
        url:$("form").attr("action"),
        type:$("form").attr("method"),
        data:$("form").serialize(),
        success:function(respuesta){
          alert(respuesta);
        }
      });
    });

  };
  </script>

  <script>
  $(function () {
    //Money Euro
    $('[data-mask]').inputmask()
    //Date picker

    $('#datepicker').datepicker({
      format: 'yyyy/mm/dd',
      startDate: '-3d',
      language: "es",
      autoclose: true,
      orientation: "auto left",
      forceParse: false,
      todayHighlight: true,
      toggleActive: true
    });
    $('#datepickerinicio').datepicker({
      format: 'yyyy/mm/dd',
      startDate: '-3d',
      language: "es",
      autoclose: true,
      orientation: "auto left",
      forceParse: false,
      todayHighlight: true,
      toggleActive: true
    }).datepicker("setDate", new Date());

    $('#datepickerfin').datepicker({
      format: 'yyyy/mm/dd',
      startDate: '-3d',
      language: "es",
      autoclose: true,
      orientation: "auto left",
      forceParse: false,
      todayHighlight: true,
      toggleActive: true,
      maxDate: '+365D'
    }).datepicker("setDate", new Date());

    $('#idatepicker').datepicker({
      format: 'yyyy/mm/dd',
      autoclose: true,
      todayHighlight: true
    })
  })
</script>

<script>
  $(function () {
    //Money Euro
    $('[data-mask]').inputmask()

  });

  $(".spinner").inputCounter();

  $(".spinner").inputCounter({
  	  selectors: {
  	    addButtonSelector: '.btn-add',
  	    subtractButtonSelector: '.btn-subtract',
  	    inputSelector: '.input-counter',
  	  }
  	});

</script>
