<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comandos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('ComandosModel');
      $this->load->model('ModelosModel');

	}

	 public function index()
 	{
    $modelos=$this->ModelosModel->listmodel();
 		$data = array('titulo' => 'Comandos','token'  => $this->auth->token(),'modelos'=>$modelos);
 		$this->layout('comandos/index_view',$data);
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
          $datacount=$this->ComandosModel->Listar($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->ComandosModel->Listar($sidx,$sord,$atrr); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function create(){

  }



 }
