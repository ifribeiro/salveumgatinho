<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resgate extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('resgate');
		$this->load->view('templates/footer');
	}
}
