<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database('default');
        
    }
    /**
     * Verifica se o usuário informado existe
     */
    public function usuarioExiste($username, $senha){
        /*sql = select id from usuarios where username = $username and senha = $senha and status=1*/
        $this->db->select('id');
        $this->db->where('username',$username);
        $this->db->where('senha',$senha);
        $this->db->where('status',1);        
        $query = $this->db->get('usuarios');
        return $query->result(); //retorna o resultado da query

    }

}