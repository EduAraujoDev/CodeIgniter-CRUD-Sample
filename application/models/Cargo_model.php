<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_model extends CI_Model{
    public function get_cargos_all(){
        return $this->db->get('cargo');
    }
}