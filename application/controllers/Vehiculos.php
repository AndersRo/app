<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('VehiculosModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Vehiculos','token'  => $this->auth->token());
 		$this->layout('vehiculos/index_view',$data);
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
          $datacount=$this->VehiculosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->VehiculosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}
public function guardar()
  {
   //$response=array();
    $rows=array("Correcto");

      if ($this->input->server('REQUEST_METHOD') == 'POST')
      {

      $IdVehiculo= $_POST['IdVehiculo'];
      $Placa= $_POST['Placa'];
      $Chasis=$_POST['Chasis'];
      $Motor=$_POST['Motor'];
      $Modelo=$_POST['Modelo'];
      $Color=$_POST['Color'];
      $txtopciones=$_POST['opciones'];
    
          //Obteniendo el Count
          $datacount=$this->TalleresModel->guardar($IdVehiculo,$Placa,$Chasis,$Motor,$Modelo,$Color,$txtopciones);
      header("Content-type:application/json");
      echo json_encode($rows);

      }

  }
 }
 ?>




