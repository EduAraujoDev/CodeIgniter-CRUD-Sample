<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departamento extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('departamento_model','departamento_model');
    }

    public function listar()
	{
		$dados = array(
			'titulo' => 'CodeIgniter - CRUD',
			'subTitulo' => 'Listar Departamentos',
			'departamentos' => $this->departamento_model->get_departamentos_all()->result()
		);

		$this->load->view('Departamento/listar', $dados);
	}
}