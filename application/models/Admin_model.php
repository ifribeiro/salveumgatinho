<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct()
    {
        //carrega o construtor do model
        parent::__construct();
        //carrega o banco de dados 'default'
        $this->load->database('default');
        
        //verifica se o usuário está logado
        if (!$this->session->userdata('logged_in')){ 
            redirect('login');
        }
    }

}