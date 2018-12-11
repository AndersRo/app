<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('ClientesModel');
      $this->load->model('TablasModel');
      $this->load->model('EmpresasModel');
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

    $tipoper="003"; //Tabla Tipos personas
		$personas=$this->TablasModel->Listar($tipoper);

    $empresas=$this->EmpresasModel->listmodel();

    /*$reresult=array();
    $item= $this->TablasModel->Listar("001"); //TipoDocumento
    array_push ($reresult,$item);*/

 		$data = array('titulo' => 'Clientes'
    ,'token'  => $this->auth->token()
    ,'tipodocumento'=>$documentos//$lista//$reresult
    ,'tipopersonas'=>$personas
    ,'empresas'=>$empresas
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
        	$cliente->opcion1 			=isset($request["opcion1"]) 			? $request["opcion1"] 	: "";
          $cliente->opcion2 			=isset($request["opcion2"]) 			? $request["opcion2"] 	: "";
        	$cliente->idactor		=isset($request["idactor"]) 	? $request["idactor"] 	: "" ;
        	$cliente->tipopersona		=isset($request["tpercampo"]) ? $request["tpercampo"] 	: "";
          $cliente->apaterno		=isset($request["papellido"]) ? $request["papellido"] 	: "";
          $cliente->amaterno		=isset($request["sapellido"]) ? $request["sapellido"] 	: "";
          $cliente->primernombre		=isset($request["pnombre"]) ? $request["pnombre"] 	: "";
          $cliente->segundonombre		=isset($request["snombre"]) ? $request["snombre"] 	: "";
          $cliente->razonsocial		=isset($request["razoncampo"]) ? $request["razoncampo"] 	: "";
          $cliente->tipodocumento		=isset($request["tdoccampo"]) ? $request["tdoccampo"] 	: "";
          $cliente->codidentificacion		=isset($request["codidenti"]) ? $request["codidenti"] 	: "";
          $cliente->ruc		=isset($request["ruc"]) ? $request["ruc"] 	: "";
          $cliente->empresa		=isset($request["empresa"]) ? $request["empresa"] 	: "";
          $cliente->usuario		=$this->auth->getuser();
          $cliente->wks		=$this->input->ip_address();
          $cliente->direccion		=isset($request["direccampo"]) ? $request["direccampo"] 	: "";
          $cliente->ubigeo		=isset($request["ubicampo"]) ? $request["ubicampo"] 	: "";
          $cliente->telefono		=isset($request["telcampo"]) ? $request["telcampo"] 	: "";

        	$data=$this->ClientesModel->registra($cliente);
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
