<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contratos extends My_Controller {

  public function __construct()
	{
		  parent::__construct();
      $this->load->model('ContratosModel');
      $this->load->model('ClientesModel');
      $this->load->model('VehiculosModel');
      $this->load->model('TablasModel');
      $this->load->model('EmpresasModel');
      $this->load->model('UsuariosModel');
	}

	 public function index()
 	{
 		$data = array('titulo' => 'Contratos','token'  => $this->auth->token());
 		$this->layout('contratos/index_view',$data);
  }

  public function create(){
    $clientes=$this->ClientesModel->listmodel();
    $vehiculos=$this->VehiculosModel->listmodel();
    //$empresas=$this->EmpresasModel->listmodel();

    $tiposerv="006"; //Tipos de servicio de contrato
    $servicio=$this->TablasModel->Listar($tiposerv);

    $tipestado="005"; //Tabla Tipos Documentos
		$orden=$this->TablasModel->Listar($tipestado);

    $tipcont="008"; //Tabla Tipos Documentos
		$contrato=$this->TablasModel->Listar($tipcont);

    $docanexo="007"; //Tipos de documento anexo
    $danexos=$this->TablasModel->Listar($docanexo);

    $tiptra="004"; //Tabla Tipos Trabajos
		$trabajo=$this->TablasModel->Listar($tiptra);

    $data = array(
    'titulo' => 'Contrato'
    ,'token'  => $this->auth->token()
    //,'empresas'=>$empresas
    //,'talleres'=>$talleres
    ,'contrato'=>$contrato
    //,'mecanicos'=>$mecanicos
    ,'trabajo'=>$trabajo
    //,'dispositivos'=>$dispositivos
    ,'orden'=>$orden
    ,'servicio'=>$servicio
    ,'danexos'=>$danexos
    );

    $this->layout('contratos/create_view', $data);
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
          $datacount=$this->ContratosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //count
          $atrr=$this->grilla->jq_getatributes($this->input->get(),$datacount);
          //Obteniendo la Data
          $data=$this->ContratosModel->Listar($sidx,$sord,$atrr,$this->auth->getidempresa()); //data
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
          $contratos=new ContratosModel();
          $contratos->opcion 			=isset($request["opcion1"]) 			? $request["opcion1"] 	: "";
          $contratos->idcontrato		=isset($request["idcontrato"]) 	? $request["idcontrato"] 	: "" ;
          $contratos->tiposervicio		=isset($request["servicio"]) 	? $request["servicio"] 	: "" ;
          $contratos->idcliente		=isset($request["idcliente"]) 	? $request["idcliente"] 	: "" ;
          $contratos->idvehiculo		=isset($request["idvehiculo"]) ? $request["idvehiculo"] 	: "";
          $contratos->tipcontrato		=isset($request["tipcontrato"]) ? $request["tipcontrato"] 	: "";
          $contratos->idempresa		= $this->auth->getidempresa();
          $contratos->stdcontrato		=isset($request["stdcontrato"]) ? $request["stdcontrato"] 	: "";
          $contratos->cadenadetalleanex		=isset($request["cadenadetalleanex"]) ? $request["cadenadetalleanex"] 	: "";
          $contratos->idcontratoorden		=isset($request["idcontratoorden"]) ? $request["idcontratoorden"] 	: "0";
          $contratos->idcontratoanex		=isset($request["idcontratoanex"]) ? $request["idcontratoanex"] 	: "0";
          $contratos->idorden		=isset($request["idord"]) ? $request["idord"] 	: "";
          $contratos->usuario		=$this->auth->getuser();
          $contratos->wks =$this->input->ip_address();

          $data=$this->ContratosModel->registra($contratos);
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

  public function data()
	{
    $response=array();
    if ($this->input->server('REQUEST_METHOD') == 'POST')
    {
        $sidx = $_POST['idcliente'];
         //$rows = array($sidx);
        $datacount=$this->ContratosModel->dataid($sidx); //count

        header("Content-type:application/json");
        echo json_encode($datacount);

        //$this->output->set_status_header(200)->set_content_type('Content-type:application/json')->set_output(json_encode($datacount));
    }
	}

  public function impresion()
  {

    $idcontrato = $_GET['idcontrato'];
    $datosclientes=array();
    //Información de clientes
    $datosclientes=$this->UsuariosModel->lisidcon($idcontrato);
    $idcliente=$datosclientes[0]->IdCliente;
    $cliente=$datosclientes[0]->cliente;
    $dni=$datosclientes[0]->CodigoIdentificacion;


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
                                <h2 class="center">CONTRATO DE GPS</h2>
                                <p class="lh">
                                  Conste por el presente documento que firman por una parte de la Sra. <b>OFELIA LLUVINA TOVAR SALDAÑA</b> con <b>DNI 21814350</b>
                                  en calidad de Gerente General de ARIFE E.I.R.L y por la otra el Sr.(a) <b>'.$cliente.'</b> con <b>DNI '.$dni.'</b> comprador(a) del equipo GPS en las siguientes condiciones.
                                </p>
                                <p>
                                  Tipo de Pago es: <b><u>CONTADO</u></b>
                                </p>
                                <p>
                                  El precio pactado por el servicio GPS es de S/450.00 soles, que incluye:
                                  <ul>
                                   <li>01 Equipo GPS-Arife GT08.</li>
                                   <li>01 Instalación y configuración de equipo GPS en su unidad vehicular.</li>
                                   <li>01 Licencia válida por un año (Desde el 05/02/2019 hasta 05/02/2020), para la visualización de la unidad vehicular en su Smartphone (Los permisos que se le otorgan para que pueda manipular su unidad, varían de acuerdo al tipo de pago del servicio de GPS)</li>
                                   <li>6 meses de garantía (no cubre mala praxis en el uso, ni manipulación del sistema eléctrico).</li>
                                  </ul>
                                </p>
                                <p>
                                  Con el Sistema de <b><u>RASTREO VEHICULAR SIN PAGO MENSUAL:</u></b>
                                </p>
                                <p>
                                  <ol class="lh">
                                    <li>El costo de renovación anual del servicio GPS, será de <b>S/225.00</b></li>
                                    <li>El costo de otra aplicativo en otro equipo de teléfono tendrá un costo  de <b>S/36.00</b></li>
                                    <li>Monitoreo y atención fuera del horario señalado, tendrá un costo de <b>S/150</b></li>
                                    <li>Las restricciones en lo referente a la cobertura están limitadas al operador, esto implica la ubicación</li>
                                  </ol>
                                  <blockquote class="lh">
                                    Cuando el vehículo este dentro de edificios, cuevas, túneles o muy cerca de edificios altos. Ante estos, la señal de GPS/GSM, no puede funcionar bien y el sistema podría dejar de trabajar.
                                  </blockquote>
                                </p>
                                <p>
                                <blockquote>
                                  <b>*No siendo ARIFE E.I.R.L responsable por falta de señal o cobertura ante estos eventos.</b>
                                </blockquote>
                                </p>
                                <p class="center">
                                    <table>
                                      <tr>
                                        <td>__________________________________</td>

                                        <td>__________________________________</td>
                                      </tr>
                                      <tr>
                                        <td>OFELIA LLUVINA TOVAR SALDAÑA</td>

                                        <td>'.$cliente.'</td>
                                      </tr>
                                      <tr>
                                        <td><b>GERENTE GENERAL</b></td>

                                        <td><b>DNI '.$dni.'</b></td>
                                      </tr>
                                    </table>
                                </p>

                              </div>
                            </page>';

                            ob_clean();
                            $this->load->library('Pdfhtml');
                            $pdf = new Pdfhtml('P','A4','fr',true,"UTF-8",array(2,2,2,2));
                            $pdf->WriteHTML($content);
                            $pdf->Output();
  }



 }
