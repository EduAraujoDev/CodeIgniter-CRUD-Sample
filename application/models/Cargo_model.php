<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_model extends CI_Model{
    public function get_cargos_all(){
        return $this->db->get('cargo');
    }

    public function set_cargo($dados=NULL){
    	if($dados <> NULL){
    		$this->db->insert('cargo',$dados);
    	}
    }
}