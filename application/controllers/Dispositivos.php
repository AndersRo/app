<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispositivos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('DispositivosModel');
      $this->load->model('ModelosModel');
      $this->load->model('EmpresasModel');
	}

	 public function index()
 	{
    $modelos=$this->ModelosModel->listmodel();
    $empresas=$this->EmpresasModel->listmodel();
 		$data = array('titulo' => 'Dispositivos','token'  => $this->auth->token(), 'modelos'=>$modelos, 'empresas'=>$empresas);
 		$this->layout('dispositivos/index_view',$data);
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
          $datacount=$this->DispositivosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->DispositivosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
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
        	$dispositivo=new DispositivosModel();
        	$dispositivo->opcion 			=isset($request["opcion"]) 			? $request["opcion"] 	: "";
        	$dispositivo->iddispositivo		=isset($request["iddispositivo"]) 	? $request["iddispositivo"] 	: "" ;
          $dispositivo->serie		=isset($request["seriecampo"]) 	? $request["seriecampo"] 	: "" ;
        	$dispositivo->imei		=isset($request["imeicampo"]) ? $request["imeicampo"] 	: "";
          $dispositivo->modelo		=isset($request["modelocampo"]) ? $request["modelocampo"] 	: "";
          $dispositivo->sim		=isset($request["simcampo"]) ? $request["simcampo"] 	: "";
          $dispositivo->idn		=isset($request["idncampo"]) ? $request["idncampo"] 	: "";
          $dispositivo->empresa		=isset($request["empresacampo"]) ? $request["empresacampo"] 	: "";
        	$dispositivo->usuario		=$this->auth->getuser();

        	$data=$this->DispositivosModel->registra($dispositivo);
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
        $sidx =$_POST['iddispositivo'];

         //$rows = array($sidx);
        $datacount=$this->DispositivosModel->lisgg($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}



 }
