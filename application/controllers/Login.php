<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //SIEMPRE PEGAR ESTO EN TODOS LOS CONTROLADORES

class Login extends CI_Controller {

	/** SIEMPRE HEREDAN
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


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