<?php
class MY_Controller extends CI_Controller {

//set the class variable.
public $template = array();
public $data = array();

public function __construct() {
  parent::__construct();
  //$this->load->helper('url');
  //comprobamos si el usuario está logueado

  date_default_timezone_set('America/Lima');

  if($this->auth->is_logged() == FALSE)
    {
      redirect(base_url('login'));
    }
}
//Layout
  public function layout($view, $params = null)
  {
  $this->template['header'] = $this->load->view('layout/header', $this->data, true);
  $this->template['left'] = $this->load->view('layout/left', $this->data, true);
  $this->template['middle'] = $this->load->view($view, $params, true);
  $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
  $this->template['controlsidebar'] = $this->load->view('layout/controlsidebar', $this->data, true);
  $this->load->view('layout/front', $this->template);
  }
}

?>
