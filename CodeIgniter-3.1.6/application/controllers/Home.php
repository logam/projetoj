<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('View_Home');
	}
	public function cliente(){
		$this->load->view('Clientes/view_lista_clientes');
	}
}
 
