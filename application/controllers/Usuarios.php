<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('UsuariosModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Usuarios','token'  => $this->auth->token());
 		$this->layout('usuarios/index_view',$data);
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
          $datacount=$this->UsuariosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->UsuariosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function listid()
  {
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idcontrato'];

         //$rows = array($sidx);
        $datacount=$this->UsuariosModel->lisidcon($sidx); //count

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
          sleep(3);
          $usuarios=new UsuariosModel();
          $usuarios->opcion 			=isset($request["opcion"]) 			? $request["opcion"] 	: "";
          $usuarios->idacceso 			=isset($request["idacceso"]) 			? $request["idacceso"] 	: "";
          $usuarios->idcontrato		  =isset($request["idcontrato"]) 	? $request["idcontrato"] 	: "" ;
          $usuarios->wks		      =$this->input->ip_address();
          $usuarios->usuario		  =$this->auth->getuser();

          $data=$this->UsuariosModel->registra($usuarios);

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
