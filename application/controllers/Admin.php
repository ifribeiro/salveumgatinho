<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
		$this->load->model('admin_model');
    }

	public function index()
	{		
		$this->load->model('admin_model');
		$this->load->view('admin/templatesadmin/header_admin');
		$this->load->view('admin/gerenciaradocoes');
		$this->load->view('admin/templatesadmin/footer_admin');
	}
	/**
	 * Função que chama a página gerenciar adocoes
	 */
	public function gerenciaradocoes(){
		$this->load->model('admin_model');
		$this->load->view('admin/templatesadmin/header_admin');
		$this->load->view('admin/gerenciaradocoes');
		$this->load->view('admin/templatesadmin/footer_admin');
	}

	/**
	 * Função que chama a página gerenciar notícias
	 */
	public function gerenciarnoticias(){
		$this->load->model('admin_model');
		$this->load->view('admin/templatesadmin/header_admin');
		$this->load->view('admin/gerenciarnoticias');
		$this->load->view('admin/templatesadmin/footer_admin');
	}
	/**
	 * Função que chama a página gerenciar informações
	 */
	public function gerenciarinformacoes(){
		$this->load->model('admin_model');
		$this->load->view('admin/templatesadmin/header_admin');
		$this->load->view('admin/gerenciarinformacoes');
		$this->load->view('admin/templatesadmin/footer_admin');
	}
	/**
	 * Sai do painel de administrador
	 */
	public function logout(){
				
		$form_data = $this->input->post();
		//define que o usuário não está logado
		$this->session->set_userdata('logged_in',FALSE);
		redirect('login'); //redireciona pro login
	}

	/**
	 * Salva o novo gato cadastrado no banco de dados
	 */
	public function salvarNovoGato(){
		//CRIAR FUNÇÃO NO MODEL
		$this->load->model('admin_model');
		$nome = $_POST['nm_gato'];
		$idade = $_POST['nm_idade'];
		$sexo = $_POST['nm_sexo'];
		$desc = $_POST['nm_desc'];
		$data = $this->admin_model->salvarNovoGato($nome,$idade,$sexo,$desc);

		echo json_encode($data);
	}

	public function exibirGatos(){
		$data = $this->admin_model->exibirGatos();
		echo json_encode($data);
	}
}
