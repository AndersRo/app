<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grupo | ARIFE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/iCheck/square/blue.css">
<!-- app -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/app.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
  <script src="<?php echo base_url();?>assets/dist/js/jquery.validate.min.js"></script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Grupo</b>ARIFE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesion</p>

    <div class="alert alert-danger" id="alert" style="display: none">
       <span id="alert-mensaje"></span>
    </div>
    <form id="frmlogin">

      <?php echo form_hidden('token', $token) ?>

      <div class="form-group has-feedback">
          <select id="empresa" name="empresa" class="form-control" data-placeholder="Seleccione empresa" class="form-control" style="width: 100%" required>
            <?php
                foreach ($empresas as $row) {
                    echo '<option value="'.$row->IdEmpresa.'">'.$row->NombreComercial.'</option>';
                }

             ?>
          </select>
      </div>

      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input name="loggin" type="text" class="form-control" placeholder="Usuario" required>
      </div>

      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="row">

        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recuerdame
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button  type="submit" name="submit" id="submit"  class="btn btn-primary btn-block btn-flat">Iniciar</button>
        </div>

        <!-- /.col -->
      </div>
    </form>

    <!--<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>-->

    <!-- /.social-auth-links -->
    <!--<a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>
  -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->


</body>
</html>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>


<script type="text/javascript">
   $(function() {
      var login={
            init:function()
            {
                //login.event();
                login.validate();
            }

            ,validate:function()
            {
                jQuery("#frmlogin").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    }
                    ,submitHandler: function(form) {
                        $("#alert-mensaje").html("");
                        $("#alert").hide();
                        login.loggin(form);
                    }
                });
            }
           ,loggin:function(form)
           {
                var wurl =  "<?php echo base_url('login/user_login');?>"
                $.ajax({
                   async: true,
                   url: wurl,
                   type: "post",
                   dataType: 'json',
                   contentType: 'application/x-www-form-urlencoded',
                   data:$(form).serialize()
                   ,beforeSend: function(data){
                   }
                   ,complete: function(data, status){
                        var werror=JSON.parse(data.responseText).error;
                        var wmsg=JSON.parse(data.responseText).mensaje;
                        if (werror==0)
                        {
                            $("#submit").attr('disabled','disabled');
                            window.location.href = "<?php echo base_url();?>";
                        }
                        else
                        {
                            $("#alert-mensaje").html(wmsg);
                            $("#alert").show();
                        }
                   }
             });
           }
        }
        login.init();
    });
</script>
