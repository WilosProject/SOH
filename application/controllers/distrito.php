<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //SIEMPRE PEGAR ESTO EN TODOS LOS CONTROLADORES

class distrito extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url'); //llamar el directorio raiz
		$this->load->database();
		$this->load->library('Grocery_CRUD');
	}
	


	public function index()
	{
		$this->load->helper('url'); //llamar el directorio raiz
		$crud = new Grocery_CRUD();

		$crud->set_relation("codCanton", "tb_canton", "NomCanton");//campo de tabla q tiene la referncia, tabla 

		$crud->set_table('tb_distrito'); //nombre de la tabla q voy a setear
		$crud->set_theme('bootstrap');


		



		$crud->set_language("spanish");
		$output = $crud->render();//renderiza la info de la tabla

		//hacer todo de aqui pa arriba-- todo se hace en el controlador
		
		$this->load->view('Ubicacion/distrito', $output); //el output hace los sp automatico de insertar y eliminar..



	}
} 

