<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('funcionario_model','funcionario_model');
    }

    public function listar()
	{
		$dados = array(
			'titulo' => 'CodeIgniter - CRUD',
			'subTitulo' => 'Listar Funcionarios',
			'funcionarios' => $this->funcionario_model->get_funcionarios_all()->result()
		);

		$this->load->view('funcionario/listar', $dados);
	}

	public function inserir()
	{
		$dados = array(
			'titulo' => 'CodeIgniter - CRUD',
			'subTitulo' => 'Inserir Funcionarios',
		);

		$this->load->view('funcionario/inserir', $dados);
	}		
}