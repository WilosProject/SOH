<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //SIEMPRE PEGAR ESTO EN TODOS LOS CONTROLADORES

class canton extends CI_Controller {

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


		//jalar datos de provincia
		$crud->set_relation("codProvincia", "tb_provincia", "NomProvincia");//campo de tabla q tiene la referncia, tabla a la q referencia, campo a mostrar

		//para que se muestre otro nombre
		$crud->display_as("codCanton", "Codigo de Cantón"); //nombre campo, como quiero q salga
		$crud->display_as("nomCanton", "Nombre del Cantón"); //nombre campo, como quiero q salga
		$crud->display_as("codProvincia", "Codigo de la Provincia"); //nombre campo, como quiero q salga



		$crud->set_table('tb_canton'); //nombre de la tabla q voy a setear
		$crud->set_theme('bootstrap');

		$crud->set_language("spanish");
		$output = $crud->render();//renderiza la info de la tabla

		//hacer todo de aqui pa arriba-- todo se hace en el controlador
		
		$this->load->view('Ubicacion/canton', $output); //el output hace los sp automatico de insertar y eliminar..



	}
} 

