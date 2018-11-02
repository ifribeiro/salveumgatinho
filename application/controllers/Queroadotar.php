<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Queroadotar extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('queroadotar');
		$this->load->view('templates/footer');
	}
}
