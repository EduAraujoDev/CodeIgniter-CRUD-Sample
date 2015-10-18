<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_model extends CI_Model{
    public function get_funcionarios_all()
    {
    	$this->db->select
    	('
    		funcionario.id_funcionario, 
    		funcionario.nome as nome_funcionario, 
    		funcionario.id_cargo, 
    		cargo.nome as nome_cargo,
    		funcionario.id_departamento,
    		departamento.nome as nome_departamento
		');
    	
    	$this->db->from('funcionario');    	
    	$this->db->join('cargo', 'funcionario.id_cargo = cargo.id_cargo');
    	$this->db->join('departamento', 'funcionario.id_departamento = departamento.id_departamento');
    	$this->db->order_by('id_funcionario', 'ASC');

        return $this->db->get();
    }

    public function set_funcionario($dados=NULL)
    {
        if($dados <> NULL){
            $this->db->insert('funcionario',$dados);
        }
    }
}