<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('MarcasModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Marcas','token'  => $this->auth->token());
 		$this->layout('marcas/index_view',$data);
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
          $datacount=$this->MarcasModel->Listar($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->MarcasModel->Listar($sidx,$sord,$atrr); //data
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
        	$marca=new MarcasModel();
        	$marca->opcion 			=isset($request["opcion"]) 			? $request["opcion"] 	: "";
        	$marca->idmarca		=isset($request["idmarca"]) 	? $request["idmarca"] 	: "" ;
        	$marca->descripcion		=isset($request["marcacampo"]) ? $request["marcacampo"] 	: "";
        	$marca->wks		=$this->input->ip_address();
        	$marca->usuario		=$this->auth->getuser();

        	$data=$this->MarcasModel->registra($marca);
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
        $sidx =$_POST['idmarca'];

         //$rows = array($sidx);
        $datacount=$this->MarcasModel->listmarca($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}

 }
 ?>
