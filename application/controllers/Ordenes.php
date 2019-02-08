<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordenes extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('OrdenesModel');
      $this->load->model('EmpresasModel');
      $this->load->model('TalleresModel');
      $this->load->model('ClientesModel');
      $this->load->model('VehiculosModel');
      $this->load->model('MecanicosModel');
      $this->load->model('TablasModel');
      $this->load->model('DispositivosModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Ordenes','token'  => $this->auth->token());
 		$this->layout('ordenes/index_view',$data);
  }

  public function create(){
    $empresas=$this->EmpresasModel->listmodel();
    $talleres=$this->TalleresModel->listmodel();
    $clientes=$this->ClientesModel->listmodel();
    $vehiculos=$this->VehiculosModel->listmodel();
    $mecanicos=$this->MecanicosModel->listmodel();
    $dispositivos=$this->DispositivosModel->listmodel();

    $tiptra="004"; //Tabla Tipos Trabajos
		$trabajo=$this->TablasModel->Listar($tiptra);

    $tipestado="005"; //Tabla Tipos Documentos
		$orden=$this->TablasModel->Listar($tipestado);

    $tiposerv="006"; //Tipos de servicio de contrato
    $servicio=$this->TablasModel->Listar($tiposerv);

    $docanexo="007"; //Tipos de documento anexo
    $danexos=$this->TablasModel->Listar($docanexo);

    $data = array(
    'titulo' => 'Ordenes'
    ,'token'  => $this->auth->token()
    ,'empresas'=>$empresas
    ,'talleres'=>$talleres
    ,'clientes'=>$clientes
    ,'vehiculos'=>$vehiculos
    ,'mecanicos'=>$mecanicos
    ,'trabajo'=>$trabajo
    ,'dispositivos'=>$dispositivos
    ,'orden'=>$orden
    ,'servicio'=>$servicio
    ,'danexos'=>$danexos
    );
    $this->layout('ordenes/create_view', $data);
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
          $datacount=$this->OrdenesModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->OrdenesModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function listdet()
	{
	    $response=array();
      if ($this->input->server('REQUEST_METHOD') == 'GET')
      {
          $sidx =$_GET['sidx'];
          $sord =$_GET['sord'];
          $idord =$_GET['idordx'];
          $atrr=$this->grilla->param;
          //Obteniendo el Count
          $datacount=$this->OrdenesModel->Listardet($sidx,$sord,$atrr,$this->auth->getidempresa(),$idord); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->OrdenesModel->Listardet($sidx,$sord,$atrr,$this->auth->getidempresa(),$idord); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function listdetprue()
	{
	    $response=array();
      if ($this->input->server('REQUEST_METHOD') == 'POST')
      {
          $idord =$_POST['idordx'];
          //Obteniendo el Count
          $datacount=$this->OrdenesModel->Listarprue($idord); //count
          header("Content-type:application/json");
          echo json_encode($datacount);

          //echo $json;
      }
	}

  public function listdetord()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'GET')
    {
        $sidx =$_GET['idorden'];

         //$rows = array($sidx);
        $datacount=$this->OrdenesModel->lisidord($sidx); //count
        $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);

        $data=$this->OrdenesModel->lisidord($sidx);
        $json=$this->grilla->jq_getdata($this->input->get(),$data);

        //header("Content-type:application/json");
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
          $ordenes=new OrdenesModel();
          $ordenes->opcion1 			=isset($request["opcion1"]) 			? $request["opcion1"] 	: "";
          $ordenes->idorden		=isset($request["idorden"]) 	? $request["idorden"] 	: "" ;
          $ordenes->idempresa		=isset($request["idempresa"]) ? $request["idempresa"] 	: "";
          $ordenes->idmecanico		=isset($request["idmecanico"]) ? $request["idmecanico"] 	: "";
          $ordenes->idcliente		=isset($request["idcliente"]) ? $request["idcliente"] 	: "";
          $ordenes->idvehiculo		=isset($request["idvehiculo"]) ? $request["idvehiculo"] 	: "";
          $ordenes->usuario		=$this->auth->getuser();
          $ordenes->wks		=$this->input->ip_address();
          $ordenes->estado		=isset($request["estado"]) ? $request["estado"] 	: "";
          $ordenes->observacion		=isset($request["observacion"]) ? $request["observacion"] 	: "";
          $ordenes->datepicker		=isset($request["datepicker"]) ? $request["datepicker"] 	: "";
          $ordenes->idatepicker		=isset($request["idatepicker"]) ? $request["idatepicker"] 	: "";
          $ordenes->idtaller		=isset($request["idtaller"]) ? $request["idtaller"] 	: "";
          $ordenes->cadenadetalle		=isset($request["cadenadetalle"]) ? $request["cadenadetalle"] 	: "";
          //$ordenes->tipotrabajo		=isset($request["tipotrabajo"]) ? $request["tipotrabajo"] 	: "";
          //$ordenes->iddispositivo		=isset($request["iddispositivo"]) ? $request["iddispositivo"] 	: "";
          //$ordenes->nrosim		=isset($request["nrosim"]) ? $request["nrosim"] 	: "";
          //$ordenes->idn		=isset($request["idn"]) ? $request["idn"] 	: "";

          $data=$this->OrdenesModel->registra($ordenes);

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

  public function listidorden()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idorden'];

         //$rows = array($sidx);
        $datacount=$this->OrdenesModel->lisid($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}

 }
 ?>
