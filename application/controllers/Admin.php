<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navbar');
		$this->load->view('admin');
		$this->load->view('templates/footer');
	}
}
