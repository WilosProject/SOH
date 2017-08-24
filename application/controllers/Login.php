
<?php

defined('BASEPATH') OR exit('No direct script access allowed'); //SIEMPRE PEGAR ESTO EN TODOS LOS CONTROLADORES
	
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

//para ponerla como principal cambiar la funcion login por index
	function login(){


	//$this->load->view('Master/login_message');
	$this->load->helper('url'); //llamar el directorio raiz

	$this->load->view('Master/log');

	}
		
}