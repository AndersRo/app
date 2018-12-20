<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comandos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('ComandosModel');
      $this->load->model('ModelosModel');

	}

	 public function index()
 	{
    $modelos=$this->ModelosModel->listmodel();
 		$data = array('titulo' => 'Comandos','token'  => $this->auth->token(),'modelos'=>$modelos);
 		$this->layout('comandos/index_view',$data);
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
          $datacount=$this->ComandosModel->Listar($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->ComandosModel->Listar($sidx,$sord,$atrr); //data
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
          $comando=new ComandosModel();
          $comando->opcion 			=isset($request["txttipm"]) 			? $request["txttipm"] 	: "";
          $comando->idcomando		=isset($request["idcomando"]) 	? $request["idcomando"] 	: "" ;
          $comando->codtipocomando		=isset($request["codigo"]) ? $request["codigo"] 	: "";
          $comando->comandos		=isset($request["comandos"]) ? $request["comandos"] 	: "";
          $comando->idmodelo		=isset($request["idmodelo"]) ? $request["idmodelo"] 	: "";

          $data=$this->ComandosModel->registra($comando);
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
        $sidx =$_POST['idcomando'];

         //$rows = array($sidx);
        $datacount=$this->ComandosModel->listcom($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}

 }
