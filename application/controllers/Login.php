<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{		
		$this->load->view('login');		
	}

	/**
	 * Verifica se o usuário existe no banco de dados 
	 */
	
	public function loginPainel(){
		//carrega o model do login
		$this->load->model('login_model');		
		$usuario = $_POST["username"];//pega o nome do usuário no input de username
		$senha = $_POST["senha"]; //pega a senha do usuário no input de senha

		//verifica se o usuário existe no banco de dados
		$data = $this->login_model->usuarioExiste($usuario,$senha);

		//verifica se algum registro é encontrado
		if($data){
			//define que o usuário está logado
			$this->session->set_userdata('logged_in',TRUE);			
			echo json_encode($data);
		}				
				
	}
}
