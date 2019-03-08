<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('UsuariosModel');
      $this->load->model('TablasModel');
	}

	 public function index()
 	{
    $tipodoc="002"; //Tabla Tipos Documentos
		$documentos=$this->TablasModel->Listar($tipodoc);

    $tipostd="001"; //Tabla Tipos Documentos
    $login=$this->TablasModel->Listar($tipostd);

 		$data = array('titulo' => 'Usuarios','token'  => $this->auth->token(),'login'=>$login,'tipodocumento'=>$documentos);
 		$this->layout('usuarios/index_view',$data);
  }

  public function create($opcion,$idusuario)
 {
   $data = array('titulo' => 'Usuarios','token'  => $this->auth->token(),'opc'=>$opcion,'usuario'=>$idusuario);
   $this->layout('usuarios/create_view',$data);
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

  public function listaopcuser()
	{
	    $response=array();
      if ($this->input->server('REQUEST_METHOD') == 'GET')
      {
          $sidx =$_GET['sidx'];
          $sord =$_GET['sord'];
          $idusuario = $_GET['idusuario'];
          $atrr=$this->grilla->param;
          //Obteniendo el Count
          $datacount=$this->UsuariosModel->Listaropcuser($sidx,$sord,$atrr,$idusuario); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->UsuariosModel->Listaropcuser($sidx,$sord,$atrr,$idusuario); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function listaopcion()
	{
	    $response=array();
      if ($this->input->server('REQUEST_METHOD') == 'GET')
      {
          $sidx =$_GET['sidx'];
          $sord =$_GET['sord'];
          $atrr=$this->grilla->param;
          //Obteniendo el Count
          $datacount=$this->UsuariosModel->Listaropcion($sidx,$sord,$atrr); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->UsuariosModel->Listaropcion($sidx,$sord,$atrr); //data
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

  public function set_opcion() //Create, Update / Delete
  {
    //sleep(5);
    $response=array();
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
          $request=$this->input->post();
          sleep(3);
          $usuarios=new UsuariosModel();
          $usuarios->opcion 			=isset($request["opc"]) 			? $request["opc"] 	: "";
          $usuarios->idusuarioopciones			=isset($request["cod"]) 			? $request["cod"] 	: "";
          $usuarios->idopcion		  =isset($request["idopcion"]) 	? $request["idopcion"] 	: "" ;
          $usuarios->idusuario		  =isset($request["idusuario"]) 	? $request["idusuario"] 	: "" ;

          $data=$this->UsuariosModel->registra_opc($usuarios);

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
