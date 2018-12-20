<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('VehiculosModel');
      $this->load->model('EmpresasModel');
	}

	 public function index()
 	{
    $empresas=$this->EmpresasModel->listmodel();

 		$data = array('titulo' => 'Vehiculos','token'  => $this->auth->token(), 'empresas'=>$empresas);
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
  public function store() //Create, Update / Delete
  {
    //sleep(5);
    $response=array();
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
          $request=$this->input->post();
          sleep(3);
          $vehiculo=new VehiculosModel();
          $vehiculo->opcion 			=isset($request["txttipm"]) 			? $request["txttipm"] 	: "";
          $vehiculo->idvehiculo		=isset($request["idvehiculo"]) 	? $request["idvehiculo"] 	: "" ;
          $vehiculo->placa		=isset($request["txtplaca"]) ? $request["txtplaca"] 	: "";
          $vehiculo->chasis		=isset($request["txtchasis"]) ? $request["txtchasis"] 	: "";
          $vehiculo->motor		=isset($request["txtmotor"]) ? $request["txtmotor"] 	: "";
          $vehiculo->modelo		=isset($request["txtmodelo"]) ? $request["txtmodelo"] 	: "";
          $vehiculo->color		=isset($request["txtcolor"]) ? $request["txtcolor"] 	: "";
          $vehiculo->usuario		=$this->auth->getuser();
          $vehiculo->wks		=$this->input->ip_address();
          $vehiculo->rutaref		=isset($request["uploadImage"]) ? $request["uploadImage"] 	: "";
          $vehiculo->rutatar		=isset($request["uploadImage1"]) ? $request["uploadImage1"] 	: "";
          $vehiculo->idempresa		=isset($request["idempresa"]) ? $request["idempresa"] 	: "";

          $data=$this->VehiculosModel->registra($vehiculo);
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

  public function listid()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idvehiculo'];

         //$rows = array($sidx);
        $datacount=$this->VehiculosModel->listveh($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}
 }
 ?>
