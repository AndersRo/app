<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mecanicos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('MecanicosModel');
      $this->load->model('TablasModel');
      $this->load->model('EmpresasModel');
	}

	 public function index()
 	{
    $tipodoc="002"; //Tabla Tipos Documentos
    $documentos=$this->TablasModel->Listar($tipodoc);

    $tipoper="003"; //Tabla Tipos personas
		$personas=$this->TablasModel->Listar($tipoper);



 		$data = array('titulo' => 'Mecanicos','token'  => $this->auth->token()
    ,'tipodocumento'=>$documentos
    ,'tipopersonas'=>$personas);
 		$this->layout('mecanicos/index_view',$data);
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
          $datacount=$this->MecanicosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->MecanicosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function listgg()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idactor'];

         //$rows = array($sidx);
        $datacount=$this->MecanicosModel->lisgg($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}

  public function store() //Create, Update / Delete
	{
		//sleep(5);
		$response=array();
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
        	$request=$this->input->post();
        	$mecanico=new MecanicosModel();
        	$mecanico->opcion1 			=isset($request["opcion1"]) 			? $request["opcion1"] 	: "";
          $mecanico->opcion2 			=isset($request["opcion2"]) 			? $request["opcion2"] 	: "";
        	$mecanico->idactor		=isset($request["idactor"]) 	? $request["idactor"] 	: "" ;
        	$mecanico->tipopersona		=isset($request["tpercampo"]) ? $request["tpercampo"] 	: "";
          $mecanico->apaterno		=isset($request["papellido"]) ? $request["papellido"] 	: "";
          $mecanico->amaterno		=isset($request["sapellido"]) ? $request["sapellido"] 	: "";
          $mecanico->primernombre		=isset($request["pnombre"]) ? $request["pnombre"] 	: "";
          $mecanico->segundonombre		=isset($request["snombre"]) ? $request["snombre"] 	: "";
          $mecanico->razonsocial		=isset($request["razoncampo"]) ? $request["razoncampo"] 	: "";
          $mecanico->tipodocumento		=isset($request["tdoccampo"]) ? $request["tdoccampo"] 	: "";
          $mecanico->codidentificacion		=isset($request["codidenti"]) ? $request["codidenti"] 	: "";
          $mecanico->ruc		=isset($request["ruc"]) ? $request["ruc"] 	: "";
          $mecanico->empresa		=$this->auth->getidempresa();
          $mecanico->usuario		=$this->auth->getuser();
          $mecanico->wks		=$this->input->ip_address();
          $mecanico->direccion		=isset($request["direccampo"]) ? $request["direccampo"] 	: "";
          $mecanico->ubigeo		=isset($request["ubicampo"]) ? $request["ubicampo"] 	: "";
          $mecanico->telefono		=isset($request["telcampo"]) ? $request["telcampo"] 	: "";

        	$data=$this->MecanicosModel->registra($mecanico);

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
 ?>
