<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informacoes extends CI_Controller {

	public function index()
	{
		$this->load->view('informacoes');
	}
}