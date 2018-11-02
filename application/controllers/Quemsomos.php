<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quemsomos extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('quemsomos');
		$this->load->view('templates/footer');
	}
}
