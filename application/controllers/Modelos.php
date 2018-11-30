<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('ModelosModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Modelos','token'  => $this->auth->token());
 		$this->layout('modelos/index_view',$data);
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
          $datacount=$this->ModelosModel->Listar($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->ModelosModel->Listar($sidx,$sord,$atrr); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

 }
 ?>
