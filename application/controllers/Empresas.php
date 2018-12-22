<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends My_Controller {

  public function __construct()

  {
		  parent::__construct();
      $this->load->model('EmpresasModel');
	}

	 public function index()
 {
 		$data = array('titulo' => 'Empresas','token'  => $this->auth->token());
 		$this->layout('empresas/index_view',$data);
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
          $datacount=$this->EmpresasModel->Listar($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->EmpresasModel->Listar($sidx,$sord,$atrr); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}
 public function store() //Create, Update / Delete
  {
    //sleep(5);
          $response=array();
          if($this->input->server('REQUEST_METHOD') == 'POST')
         {
          $request=$this->input->post();
          sleep(3);
          $empresa=new EmpresasModel();
          $empresa->opcion =isset($request["opcion"])      ? $request["opcion"]  : "";
          $empresa->idempresa =isset($request["idempresa"])   ? $request["idempresa"]   : "" ;
          $empresa->ruc =isset($request["ruc"])  ? $request["ruc"]  : "" ;
          $empresa->razon =isset($request["razonsocial"]) ? $request["razonsocial"]   : "";
          $empresa->nombrecomercial =isset($request["nombrecomercial"]) ? $request["nombrecomercial"]   : "";
          $empresa->imagen =isset($request["rutalogo"]) ? $request["rutalogo"]   : "";
          $empresa->representante =isset($request["representante"]) ? $request["representante"]   : "";
          $empresa->wks =$this->input->ip_address();
          $empresa->usuario =$this->auth->getuser();

            $data=$this->EmpresasModel->registra($empresa);
            if($data)
        {
           if($data[0]->Code==0)
          $response=array('error'=>$data[0]->Code,'mensaje'=>$data[0]->Message,'id'=>$data[0]->Id);
          else
          $response=array('error'=>$data[0]->Code,'mensaje'=>$data[0]->Message);
        }
          else {
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
        $sidx =$_POST['idempresa'];

         //$rows = array($sidx);
        $datacount=$this->EmpresasModel->listemp($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}
}
