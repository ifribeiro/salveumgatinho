<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('noticias');
		$this->load->view('templates/footer');
	}
}
