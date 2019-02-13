<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contratos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('ContratosModel');
      $this->load->model('ClientesModel');
      $this->load->model('VehiculosModel');
      $this->load->model('TablasModel');
      $this->load->model('EmpresasModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Contratos','token'  => $this->auth->token());
 		$this->layout('contratos/index_view',$data);
  }

  public function create(){
    $clientes=$this->ClientesModel->listmodel();
    $vehiculos=$this->VehiculosModel->listmodel();
    $empresas=$this->EmpresasModel->listmodel();

    $tiposerv="006"; //Tipos de servicio de contrato
    $servicio=$this->TablasModel->Listar($tiposerv);

    $tipestado="005"; //Tabla Tipos Documentos
		$orden=$this->TablasModel->Listar($tipestado);

    $docanexo="007"; //Tipos de documento anexo
    $danexos=$this->TablasModel->Listar($docanexo);
    
    $tiptra="004"; //Tabla Tipos Trabajos
		$trabajo=$this->TablasModel->Listar($tiptra);

    $data = array(
    'titulo' => 'Contrato'
    ,'token'  => $this->auth->token()
    ,'empresas'=>$empresas
    //,'talleres'=>$talleres
    ,'clientes'=>$clientes
    ,'vehiculos'=>$vehiculos
    //,'mecanicos'=>$mecanicos
    ,'trabajo'=>$trabajo
    //,'dispositivos'=>$dispositivos
    ,'orden'=>$orden
    ,'servicio'=>$servicio
    ,'danexos'=>$danexos
    );

    $this->layout('contratos/create_view', $data);
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
          $datacount=$this->ContratosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->ContratosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function store() //Create, Update / Delete
  {
    //sleep(5);
    $response=array();
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
          $request=$this->input->post();
          sleep(3);
          $contratos=new ContratosModel();
          $contratos->opcion 			=isset($request["opcion1"]) 			? $request["opcion1"] 	: "";
          $contratos->idcontrato		=isset($request["idcontrato"]) 	? $request["idcontrato"] 	: "" ;
          $contratos->tiposervicio		=isset($request["servicio"]) 	? $request["servicio"] 	: "" ;
          $contratos->idcliente		=isset($request["idcliente"]) 	? $request["idcliente"] 	: "" ;
          $contratos->idvehiculo		=isset($request["idvehiculo"]) ? $request["idvehiculo"] 	: "";
          $contratos->tipcontrato		=isset($request["tipcontrato"]) ? $request["tipcontrato"] 	: "";
          $contratos->idempresa		=isset($request["idempresa"]) ? $request["idempresa"] 	: "";
          $contratos->stdcontrato		=isset($request["stdcontrato"]) ? $request["stdcontrato"] 	: "";
          $contratos->cadenadetalleanex		=isset($request["cadenadetalleanex"]) ? $request["cadenadetalleanex"] 	: "";
          $contratos->idcontratoorden		=isset($request["idcontratoorden"]) ? $request["idcontratoorden"] 	: "0";
          $contratos->idcontratoanex		=isset($request["idcontratoanex"]) ? $request["idcontratoanex"] 	: "0";
          $contratos->idorden		=isset($request["idord"]) ? $request["idord"] 	: "";
          $contratos->usuario		=$this->auth->getuser();
          $contratos->wks =$this->input->ip_address();

          $data=$this->ContratosModel->registra($contratos);
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



 }
