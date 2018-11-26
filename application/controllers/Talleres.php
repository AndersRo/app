<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talleres extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('TalleresModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Talleres','token'  => $this->auth->token());
 		$this->layout('talleres/index_view',$data);
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
          $datacount=$this->TalleresModel->Listar($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->TalleresModel->Listar($sidx,$sord,$atrr); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

 }
 ?>
