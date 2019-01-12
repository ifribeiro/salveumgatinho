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

    function salvarNovoGato($nome,$idade,$sexo,$desc){
        $data = array(
            'nm_gato' => "'".$nome."'",
            'nm_idade' => "'".$idade."'",
            'nm_sexo' => "'".$sexo."'",
            'nm_desc' => "'".$desc."'"
        );    
        return $this->db->insert('gatos_teste', $data);
    }

    function exibirGatos(){
        $query = $this->db->get('gatos_teste');
        return $query->result(); //retorna o resultado da query
    }

}