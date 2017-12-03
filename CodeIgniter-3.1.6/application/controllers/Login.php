<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$dados['pagina'] = 'login';
		$this->load->view('View_Home',$dados);		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */