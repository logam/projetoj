<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_Cliente extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Clientes/view_lista_cliente');
	}
}
  
