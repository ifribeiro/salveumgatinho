<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$this->load->view('templates/navbar');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function testarbanco(){
		/*
		$this->load->database();
		$query = $this->db->query('SELECT * FROM teste');
		foreach ($query->result() as $row){
        	echo $row->id;
        	echo $row->nome;
		}*/
	}
}
