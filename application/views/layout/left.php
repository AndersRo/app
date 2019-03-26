<?php
$CI =& get_instance();
$CI->load->library('Menu');
$menu=array();
$s=$this->session->userdata();
$usuario=$s["login"];
$menu=$CI->menu->construyemenu($usuario);
?>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php $s=$this->session->userdata(); echo $s["login"]?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>

    <?php
    foreach ($menu as $key => $value) {
      # code...
      echo $value;
    }
  ?>

  </section>
  <!-- /.sidebar -->
</aside>
