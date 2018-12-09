<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('ClientesModel');
      $this->load->model('TablasModel');
      //Modelo Tablas
	}

	 public function index()
 	{

    /*$lista=array();
    $item = array('codigo' =>'002001' , 'descripcion'=>'DNI' );
    array_push ($lista,$item);
    $item2 = array('codigo' =>'002002' , 'descripcion'=>'RUC' );
    array_push ($lista,$item2);*/

    $tipodoc="002"; //Tabla Tipos Documentos
		$documentos=$this->TablasModel->Listar($tipodoc);

    /*$reresult=array();
    $item= $this->TablasModel->Listar("001"); //TipoDocumento
    array_push ($reresult,$item);*/

 		$data = array('titulo' => 'Clientes'
    ,'token'  => $this->auth->token()
    ,'tipodocumento'=>$documentos//$lista//$reresult
    );
 		$this->layout('clientes/index_view',$data);
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
          $datacount=$this->ClientesModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->ClientesModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
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

      $valormarca= $_POST['marcacampo'];
      $valormodelo= $_POST['modelocampo'];

          //Obteniendo el Count
          $datacount=$this->ClientesModel->guardar($valormarca,$valormodelo);



      header("Content-type:application/json");
      echo json_encode($rows);

      }

  }

  public function listgg()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idactor'];

         //$rows = array($sidx);
        $datacount=$this->ClientesModel->lisgg($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}

 }
