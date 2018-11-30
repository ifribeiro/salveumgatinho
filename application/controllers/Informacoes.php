<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informacoes extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('informacoes');
		$this->load->view('templates/footer');
	}

	public function adocao(){
		$this->load->view('templates/navbar');
		$this->load->view('informacoes/adocao');
		$this->load->view('templates/footer');
	}
 	public function castracao(){
		$this->load->view('templates/navbar');
		$this->load->view('informacoes/castracao');
		$this->load->view('templates/footer');
	}
 	public function lartemporario(){
		$this->load->view('templates/navbar');
		$this->load->view('informacoes/lar-temporario');
		$this->load->view('templates/footer');
	}
 	public function resgate(){
		$this->load->view('templates/navbar');
		$this->load->view('informacoes/resgate');
		$this->load->view('templates/footer');
	}
 	public function queroajudar(){
		$this->load->view('templates/navbar');
		$this->load->view('informacoes/queroajudar');
		$this->load->view('templates/footer');
	}
}
