<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talleres extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('TalleresModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Talleres','token'  => $this->auth->token());
 		$this->layout('talleres/index_view',$data);
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
          $datacount=$this->TalleresModel->Listar($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->TalleresModel->Listar($sidx,$sord,$atrr); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function listid()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idtaller'];

         //$rows = array($sidx);
        $datacount=$this->TalleresModel->listtaller($sidx); //count

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
        	$taller=new TalleresModel();
        	$taller->opcion 			=isset($request["opcion"]) 			? $request["opcion"] 	: "";
          $taller->idtaller		=isset($request["idtaller"]) 	? $request["idtaller"] 	: "" ;
          $taller->descripcion		=isset($request["tallercampo"]) ? $request["tallercampo"] 	: "";
        	$taller->wks		=$this->input->ip_address();
        	$taller->usuario		=$this->auth->getuser();

        	$data=$this->TalleresModel->registra($taller);
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
