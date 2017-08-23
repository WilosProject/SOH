<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 class Fobias extends CI_Controller
  {

	

	 public function __construct()
	 {    
	 	 parent::__construct();
	 	 $this->load->helper('url'); //llamar el directorio raiz
		 $this->load->database();
		 $this->load->library('Grocery_CRUD');
	 }
	 public function index()
	 {
	 	$this->load->helper('url');
	 	$crud = new Grocery_CRUD();

         $crud-> set_table('tb_fobia');
         $crud->set_theme('bootstrap');

         $crud->set_language("spanish");
         $output =$crud->render();

         $this->load->view('Fobias/vFobias', $output);	 	
	 }

  }

 ?>