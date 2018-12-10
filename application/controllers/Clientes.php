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

    $tipoper="003"; //Tabla Tipos Documentos
		$personas=$this->TablasModel->Listar($tipoper);

    /*$reresult=array();
    $item= $this->TablasModel->Listar("001"); //TipoDocumento
    array_push ($reresult,$item);*/

 		$data = array('titulo' => 'Clientes'
    ,'token'  => $this->auth->token()
    ,'tipodocumento'=>$documentos//$lista//$reresult
    ,'tipopersonas'=>$personas
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

  public function store() //Create, Update / Delete
	{
		//sleep(5);
		$response=array();
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
        	$request=$this->input->post();
        	$cliente=new ClientesModel();
        	$cliente->opcion 			=isset($request["opcion"]) 			? $request["opcion"] 	: "";
        	$cliente->idmarca		=isset($request["idmarca"]) 	? $request["idmarca"] 	: "0" ;
        	$cliente->descripcion		=isset($request["marcacampo"]) ? $request["marcacampo"] 	: "";
        	$cliente->wks		=$this->input->ip_address();
        	$cliente->usuario		=$this->auth->getuser();

        	$data=$this->MarcasModel->registra($cliente);
			if ($data)
			{
				if ($data[0]->Code==0)
					$response=array('error'=>$data[0]->Code,'mensaje'=>$data[0]->Message,'id'=>$data[0]->Id);
				else
					$response=array('error'=>$data[0]->Code,'mensaje'=>$data[0]->Message);
			}
			else{
				$response=array('error'=>'1','mensaje'=>'Error');
			}

	   		$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($response));
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
