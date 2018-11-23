<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth
{
	 protected $ci;
	 //creamos una instancia del super objeto de codeigniter
	 //en el constructor para poder tenerlo disponible las veces
	 //que necesitemos sin repetir la misma línea
	 public function __construct()
	 {
	 	$this->ci =& get_instance();
    	$this->ci->load->model('LoginModel','',TRUE);
    	//$this->ci->load->model('EmpresaModel','',TRUE);
	 }

 	//creamos una token para nuestros formularios
 	public function token()
    {
        $token = md5(uniqid(rand(),true));
        $this->ci->session->set_userdata('token',$token);
        return $token;
    }

	 //función para comprobar si el usuario está logueado
	 public function is_logged()
	 {
	 	return $this->ci->session->userdata('login'); //!== FALSE ? TRUE : FALSE;
	 }

	//función para loguear a los usuarios
	 public function login_user($login,$password)
	 {
			$data=$this->ci->LoginModel->getcredenciales($login,$password);
			if ($data)
			{
				return $result=array('error'=>$data[0]->Code,'mensaje'=>$data[0]->Message);
			}
			else
			{
				return $result=array('error'=>'1','mensaje'=>'Problema al Validar');
			}
	 }

	 //función para crear sesiones
	 public function crear_sesiones($login,$password)
	 {

		 $data = array(
		 				'login'=>$login
		 				,'password' => $this->ci->bcrypt->hash_password($password)
		 			);

		 $this->ci->session->set_userdata($data);
	 }

	 //función para cerrar sesión
	 public function logout()
	 {
		 $this->ci->session->unset_userdata(array('login', 'password'));
		 $this->ci->session->sess_destroy();
		 redirect(base_url('login'));
	}

	public function getuser()
	{
		return $this->ci->session->userdata('login');
	}

	public function getidempresa()
	{
		return 1;
	}

 }
