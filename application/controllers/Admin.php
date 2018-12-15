<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/templatesadmin/header_admin');
		$this->load->view('admin/gerenciaradocoes');
		$this->load->view('admin/templatesadmin/footer_admin');
	}
	/**
	 * Função que chama a página gerenciar adocoes
	 */
	public function gerenciaradocoes(){
		$this->load->view('admin/templatesadmin/header_admin');
		$this->load->view('admin/gerenciaradocoes');
		$this->load->view('admin/templatesadmin/footer_admin');
	}

	/**
	 * Função que chama a página gerenciar notícias
	 */
	public function gerenciarnoticias(){
		$this->load->view('admin/templatesadmin/header_admin');
		$this->load->view('admin/gerenciarnoticias');
		$this->load->view('admin/templatesadmin/footer_admin');
	}
	/**
	 * Função que chama a página gerenciar informações
	 */
	public function gerenciarinformacoes(){
		$this->load->view('admin/templatesadmin/header_admin');
		$this->load->view('admin/gerenciarinformacoes');
		$this->load->view('admin/templatesadmin/footer_admin');
	}
}
