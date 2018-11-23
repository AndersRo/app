<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispositivos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('DispositivosModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Dispositivos','token'  => $this->auth->token());
 		$this->layout('dispositivos/index_view',$data);
  }


  public function list()
	{
	    $response=array();
      if ($this->input->server('REQUEST_METHOD') == 'GET')
      {
          $sidx =$_GET['sidx'];
          $sord =$_GET['sord'];
          $atrr=$this->grilla->param;
          //Obteniendo el Count
          $datacount=$this->DispositivosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->DispositivosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}



 }
