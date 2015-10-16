<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departamento_model extends CI_Model{
    public function get_departamentos_all()
    {
        return $this->db->get('departamento');
    }

    public function set_departamento($dados=NULL)
    {
    	if($dados <> NULL){
    		$this->db->insert('departamento',$dados);
    	}
    }
}