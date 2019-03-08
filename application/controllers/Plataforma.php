<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plataforma extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('PlataformaModel');
      $this->load->model('EmpresasModel');
      $this->load->model('TablasModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Plataforma','token'  => $this->auth->token());
 		$this->layout('plataforma/index_view',$data);
  }

  public function create()
  {
    $stdacceso="001";
    $acceso=$this->TablasModel->Listar($stdacceso);

    $data = array(
      'titulo' => 'Plataforma'
      ,'token'  => $this->auth->token()
      ,'acceso' => $acceso
    );
    $this->layout('plataforma/create_view', $data);
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
          $datacount=$this->PlataformaModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->PlataformaModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
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
          $plataforma=new PlataformaModel();
          $plataforma->opcion 			=isset($request["opcion"]) 			? $request["opcion"] 	: "";
          $plataforma->idacceso 			=isset($request["idacceso"]) 			? $request["idacceso"] 	: "";
          $plataforma->idcliente		  =isset($request["idcliente"]) 	? $request["idcliente"] 	: "" ;
          //$plataforma->idcontrato		  =isset($request["idcontrato"]) 	? $request["idcontrato"] 	: "" ;
          $plataforma->accesoapp		  =isset($request["accesoapp"]) 	? $request["accesoapp"] 	: "" ;
          $plataforma->accesoweb		  =isset($request["accesoweb"]) 	? $request["accesoweb"] 	: "" ;
          $plataforma->idempresa		=$this->auth->getidempresa();
          $plataforma->conexiones		=isset($request["conexiones"]) ? $request["conexiones"] 	: "";
          $plataforma->user		=isset($request["login"]) ? $request["login"] 	: "";
          $plataforma->passp	=md5(isset($request["password"]) ? $request["password"] 	: "");
          $plataforma->passc	=md5(isset($request["onoff"]) ? $request["onoff"] 	: "");
          $plataforma->wks		      =$this->input->ip_address();
          $plataforma->usuario		  =$this->auth->getuser();
          $plataforma->estado		=isset($request["estado"]) ? $request["estado"] 	: "";

          $data=$this->PlataformaModel->registra($plataforma);

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
