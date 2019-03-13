<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordenes extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('OrdenesModel');
      $this->load->model('EmpresasModel');
      $this->load->model('TalleresModel');
      $this->load->model('ClientesModel');
      $this->load->model('VehiculosModel');
      $this->load->model('MecanicosModel');
      $this->load->model('TablasModel');
      $this->load->model('DispositivosModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Ordenes','token'  => $this->auth->token());
 		$this->layout('ordenes/index_view',$data);
  }

  public function create(){
    $talleres=$this->TalleresModel->listmodel();
    $clientes=$this->ClientesModel->listmodel();
    $vehiculos=$this->VehiculosModel->listmodel();
    $mecanicos=$this->MecanicosModel->listmodel();
    $dispositivos=$this->DispositivosModel->listmodel();

    $tiptra="004"; //Tabla Tipos Trabajos
		$trabajo=$this->TablasModel->Listar($tiptra);

    $tipestado="005"; //Tabla Tipos Documentos
		$orden=$this->TablasModel->Listar($tipestado);

    $tiposerv="006"; //Tipos de servicio de contrato
    $servicio=$this->TablasModel->Listar($tiposerv);

    $docanexo="007"; //Tipos de documento anexo
    $danexos=$this->TablasModel->Listar($docanexo);

    $data = array(
    'titulo' => 'Ordenes'
    ,'token'  => $this->auth->token()
    ,'talleres'=>$talleres
    ,'clientes'=>$clientes
    ,'vehiculos'=>$vehiculos
    ,'mecanicos'=>$mecanicos
    ,'trabajo'=>$trabajo
    ,'dispositivos'=>$dispositivos
    ,'orden'=>$orden
    ,'servicio'=>$servicio
    ,'danexos'=>$danexos
    );
    $this->layout('ordenes/create_view', $data);
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
          $datacount=$this->OrdenesModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->OrdenesModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;
      }
	}

  public function listdet()
	{
	    $response=array();
      if ($this->input->server('REQUEST_METHOD') == 'GET')
      {
          $sidx =$_GET['sidx'];
          $sord =$_GET['sord'];
          //$idord =$_GET['idordx'];
          $atrr=$this->grilla->param;
          //Obteniendo el Count
          $datacount=$this->OrdenesModel->Listardet($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->OrdenesModel->Listardet($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
          $json=$this->grilla->jq_getdata($this->input->get(),$data);
          echo $json;

      }
	}

  public function listdetprue()
	{
	    $response=array();
      if ($this->input->server('REQUEST_METHOD') == 'POST')
      {
          $idord =$_POST['idordx'];
          //Obteniendo el Count
          $datacount=$this->OrdenesModel->Listarprue($idord); //count
          header("Content-type:application/json");
          echo json_encode($datacount);

          //echo $json;
      }
	}

  public function listdetord()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'GET')
    {
        $sidx =$_GET['idorden'];

         //$rows = array($sidx);
        $datacount=$this->OrdenesModel->lisidord($sidx); //count
        $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);

        $data=$this->OrdenesModel->lisidord($sidx);
        $json=$this->grilla->jq_getdata($this->input->get(),$data);

        //header("Content-type:application/json");
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
          $ordenes=new OrdenesModel();
          $ordenes->opcion1 			=isset($request["opcion1"]) 			? $request["opcion1"] 	: "";
          $ordenes->idorden		=isset($request["idorden"]) 	? $request["idorden"] 	: "" ;
          $ordenes->idempresa		=$this->auth->getidempresa();
          $ordenes->idmecanico		=isset($request["idmecanico"]) ? $request["idmecanico"] 	: "";
          $ordenes->idcliente		=isset($request["idcliente"]) ? $request["idcliente"] 	: "";
          $ordenes->idvehiculo		=isset($request["idvehiculo"]) ? $request["idvehiculo"] 	: "";
          $ordenes->usuario		=$this->auth->getuser();
          $ordenes->wks		=$this->input->ip_address();
          $ordenes->estado		=isset($request["estado"]) ? $request["estado"] 	: "";
          $ordenes->observacion		=isset($request["observacion"]) ? $request["observacion"] 	: "";
          $ordenes->datepicker		=isset($request["datepicker"]) ? $request["datepicker"] 	: "";
          $ordenes->idtaller		=isset($request["idtaller"]) ? $request["idtaller"] 	: "";
          $ordenes->cadenadetalle		=isset($request["cadenadetalle"]) ? $request["cadenadetalle"] 	: "";

          $data=$this->OrdenesModel->registra($ordenes);

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

  public function listidorden()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idorden'];

         //$rows = array($sidx);
        $datacount=$this->OrdenesModel->lisid($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}

  public function detordenid()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx =$_POST['idordendetalle'];

         //$rows = array($sidx);
        $datacount=$this->OrdenesModel->detidord($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);
    }
	}

  public function impresion()
  {

    $idorden = $_GET['idorden'];
    $datosorden=array();
    //Información de clientes
    $datosorden=$this->OrdenesModel->Listordpdf($idorden);
    //print_r($datosorden);
    $idorden = $datosorden[0]->IdOrden;
    $empresa = $datosorden[0]->NombreComercial;
    $mecanico = $datosorden[0]->Mecanico;
    $Cliente = $datosorden[0]->Cliente;
    $codidentificacion = $datosorden[0]->CodigoIdentificacion;
    $direccion = $datosorden[0]->Direccion;
    $ubigeo = $datosorden[0]->Ubigeo;
    $telefono = $datosorden[0]->Telefono;
    $placa = $datosorden[0]->Placa;
    $marca = $datosorden[0]->Marca;
    $modelo = $datosorden[0]->Modelo;
    $color = $datosorden[0]->Color;
    $chasis = $datosorden[0]->Chasis;
    $motor = $datosorden[0]->Motor;
    $observacion = $datosorden[0]->Obsvacion;
    $fchprog = $datosorden[0]->FechaProgramada;
    $fchejec = $datosorden[0]->FechaEjecutada;
    $taller = $datosorden[0]->Descripcion;

    //$idcliente=$datosclientes[0]->IdCliente;
    //$cliente=$datosclientes[0]->cliente;
    //$dni=$datosclientes[0]->CodigoIdentificacion;
    //nro orden de trabajo
    //fecha de Trabajo
    //hora de inicio
    //hora fin
    //tecnico asignado
    //#nro de Programacion
    //empresa
    //Lugar de instalación
    /*DATOS DE CLIENTE*/
    //documento del cliente
    //cliente
    //direccion
    //lugar
    //telefonos
    /*DATOS DEL VEHICULO*/
    //Nro de placa
    //marca
    //modelo
    //chasis
    //Motor
    //Año mod
    //detalle del Trabajo
      //item
        //tipo de Trabajo
        //motivo
        //Disposito GPS
        //Serie GPS
        //IMEI
        //SIM
        //Obs. Trabajo


    ob_start();
                        $content='
                            <style type="text/css">

                        body {
                                font-family: Arial, Helvetica;
                                font-size: 40px;
                                background-color: #2C43F4;
                             }
                    .lh{line-height: 150%;}
                    .fz8{font-size: 8px;}
                    .fz9{font-size: 9px;}
                    .fz10{font-size: 10px;}
                    .fz11{font-size: 11px;}
                    .fz12{font-size: 12px;}
                    .fz13{font-size: 13px;}
                    .fz14{font-size: 14px;}
                    .fz15{font-size: 15px;}
                    .fz16{font-size: 16px;}
                    .fz17{font-size: 17px;}
                    .fz18{font-size: 18px;}
                    .center{text-align: center}
                    .izquierda{text-align: left}
                    .derecha{text-align: right}
                    .bold{font-weight:bold;}
                    .w18prct{width:18%}
                    .w25prct{width:25%}
                    .w75prct{width:75%}
                    .w50prct{width:50%;max-width:50%}
                    .w45prct{width:45%}
                    .w10prct{width:10%}
                    .w100prct{width:100%}
                    .pdizq10{padding-left:10px}
                     p.p_head
                    {
                        margin:0px;
                        padding:0px;
                        margin-bottom:3px;
                    }
                     table.page_footer {width: 100%; border: none; padding: 2mm }
                     table.page_contheader {width: 650px; border: none; padding: 2mm }
                     table.page_contheader p{
                        margin:0px;
                        padding:0px;
                        margin-bottom:3px;
                     }
                     p.emtpy
                     {
                        margin:0px;
                        padding:0px;
                        margin-bottom:3px;
                     }
                     table.tablaborder {width:100%;border-collapse:collapse;}
                     table.tablaborder td{
                        padding: 2px;
                        border: 1px solid #282828;
                        min-height:80px;
                     }

                     table.tablaborder th{
                        padding: 2px;
                        border: 1px solid #282828;
                     }

                     table.tblhorarios
                     {
                        padding-bottom:20px;
                     }

                     .brd1{border: 1px solid #282828;}
                     .brd1_izq{border-left: 1px solid #282828;}
                     .brd1_der{border-right: 1px solid #282828;}
                     .brd1_arr{border-top: 1px solid #282828;}
                     .brd1_aba{border-bottom: 1px solid #282828;}
                     table.tabla {width:100%;border-collapse:collapse;}
                     table.tabla td{
                        padding: 2px;
                        min-height:80px;
                     }

                     table.tabla th{
                        padding: 2px;
                     }

                     .titulo{
                        color: #FFFFFF;
                        background-color: #282828;
                        font-weight: bold;
                     }
                     ol.textj li{
                        text-align:justify;
                        padding-bottom:5px;
                     }

                     .wrapbody
                     {
                        padding-top: 15px;
                     }
                    </style>
                            <page backtop="5mm" backbottom="7mm" backleft="8mm" backright="8mm">
                             <page_header>
                                        <table class="page_contheader">
                                            <tr>
                                                <td style="width: 100%; text-align: left">
                                                    <p class="fz10"></p>
                                                </td>
                                            </tr>
                                        </table>
                             </page_header>
                             <page_footer>
                             </page_footer>

                              <div class="wrapbody">

<table class="tablaborder">

 <thead> <!-- Pasajeros del vuelo 377 -->

     <tr>

         <th colspan="4" class="center">Orden de Trabajo</th>

     </tr>

 </thead>


 <tfoot> <!-- Pie de tabla -->

     <tr>

         <th colspan="4" class="center">Orden de Trabajo</th>

     </tr>

 </tfoot>


 <tbody> <!-- Cuerpo de la tabla -->

     <tr>

         <td>Nº Orden</td>

         <td>'.$idorden.'</td>

         <td>Tecnico Asignado</td>

         <td>'.$mecanico.'</td>
    </tr>

    <tr>

         <td>Fecha de trabajo:</td>

         <td>'.$fchprog.'</td>

         <td>Nº Programacion:</td>

         <td>P00001</td>

     </tr>

     <tr>

         <td>Hora inicio:</td>

         <td>'.$fchprog.'</td>

         <td>Empresa:</td>

         <td>'.$empresa.'</td>

     </tr>

     <tr>

         <td>Hora Fin:</td>

         <td>'.$fchejec.'</td>

         <td>Lugar de instalacion:</td>

         <td>'.$taller.'</td>

     </tr>

     <tr>

         <th colspan="4">DATOS DEL CLIENTE</th>

     </tr>

     <tr>

         <td colspan="2">Doc Cliente:</td>

         <td colspan="2">'.$codidentificacion.'</td>

    </tr>

    <tr>

        <td colspan="2">Cliente:</td>

        <td colspan="2">'.$Cliente.'</td>

    </tr>

    <tr>

         <td colspan="2">Direccion:</td>

         <td colspan="2">'.$direccion.'</td>

     </tr>

     <tr>

         <td colspan="2">Lugar:</td>

         <td colspan="2">'.$ubigeo.'</td>

     </tr>

     <tr>

         <td colspan="2">Telefonos:</td>

         <td colspan="2">'.$telefono.'</td>

     </tr>

     <tr>

         <th colspan="4">DATOS DEL VEHICULO</th>

     </tr>

     <tr>

         <td>Nº Placa:</td>

         <td>'.$placa.'</td>

         <td>Chasis:</td>

         <td>'.$chasis.'</td>
    </tr>

    <tr>

         <td>Marca:</td>

         <td>'.$marca.'</td>

         <td>Motor:</td>

         <td>'.$motor.'</td>

     </tr>

     <tr>

         <td>Modelo:</td>

         <td>'.$modelo.'</td>

         <td>AÑO MOD:</td>

         <td>2019</td>

     </tr>

     <tr>

         <td>Color</td>

         <td>'.$color.'</td>

     </tr>

 </tbody>

</table>


<table class="tablaborder">

 <thead> <!-- Pasajeros del vuelo 377 -->

     <tr>

         <th colspan="2">DETALLE TRABAJO</th>

     </tr>

 </thead>


 <tfoot> <!-- Pie de tabla -->

     <tr>

         <th colspan="2">DETALLE TRABAJO</th>

     </tr>

 </tfoot>


 <tbody> <!-- Cuerpo de la tabla -->

     <tr>

         <td>Tipo de Trabajo:</td>

         <td>INSTALACION NUEVA</td>

    </tr>

    <tr>

        <td>Motivo:</td>

        <td>NINGUNA</td>

    </tr>

    <tr>

         <td>Dispositivo GPS:</td>

         <td>GPS ARIFE GT-08</td>

     </tr>

     <tr>

         <td>Serie GPS:</td>

         <td>00004122233355</td>

     </tr>

     <tr>

         <td>IMEI:</td>

         <td>67162035870153</td>

     </tr>

     <tr>

         <td>SIM:</td>

         <td>970511648</td>

     </tr>

     <tr>

         <td>OBS Trabajo:</td>

         <td>xxxxxxxxxxxxx</td>

     </tr>


 </tbody>

</table>
                              </div>
                            </page>';

                            ob_clean();
                            $this->load->library('Pdfhtml');
                            $pdf = new Pdfhtml('P','A4','fr',true,"UTF-8",array(2,2,2,2));
                            $pdf->WriteHTML($content);
                            $pdf->Output();


  }

 }
 ?>
