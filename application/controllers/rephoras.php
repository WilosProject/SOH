<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //SIEMPRE PEGAR ESTO EN TODOS LOS CONTROLADORES
	

	class rephoras extends CI_Controller
	 {

	

	public function index()
	{
		$this->load->helper('url'); //llamar el directorio raiz
		
		$this->load->view('rephoras/rephoras');
	}
}
