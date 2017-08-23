<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //SIEMPRE PEGAR ESTO EN TODOS LOS CONTROLADORES
	

	class licencia extends CI_Controller
	 {


function __construct() //llamar el constructor padre siempre
	{
		parent::__construct();
		$this->load->helper('url');//llama la url raiz
		$this->load->database();
		$this->load->library('Grocery_CRUD');
	}

	public function index()
	{
		$crud= new Grocery_CRUD();
		$crud->set_table('tb_licencia');//carga la tabla
		$crud->set_theme('bootstrap');

		$crud->set_language("spanish");
		$output=$crud->render();

		$this->load->view ('licencia/vlicencia',$output);


	}
	
}
