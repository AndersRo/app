<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('ModelosModel');
      $this->load->model('MarcasModel');
	}

	 public function index()
 	{

    $marcas=$this->MarcasModel->listmodel();

 		$data = array('titulo' => 'Modelos','token'  => $this->auth->token(),'marcas'=>$marcas);
 		$this->layout('modelos/index_view',$data);
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
          $datacount=$this->ModelosModel->Listar($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->ModelosModel->Listar($sidx,$sord,$atrr); //data
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
        	$modelo=new ModelosModel();
        	$modelo->opcion 			=isset($request["opcion"]) 			? $request["opcion"] 	: "";
        	$modelo->idmodelo		=isset($request["idmodelo"]) 	? $request["idmodelo"] 	: "" ;
          $modelo->idmarca		=isset($request["marcacampo"]) 	? $request["marcacampo"] 	: "" ;
          $modelo->descripcion		=isset($request["modelocampo"]) 	? $request["modelocampo"] 	: "" ;
          $modelo->wks		=$this->input->ip_address();;
        	$modelo->file		=isset($request["filecampo"]) ? $request["filecampo"] 	: "";
        	$modelo->usuario		=$this->auth->getuser();

        	$data=$this->ModelosModel->registra($modelo);
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

  public function listmodelo()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idmodelo'];

         //$rows = array($sidx);
        $datacount=$this->ModelosModel->lisid($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}

 }
 ?>
