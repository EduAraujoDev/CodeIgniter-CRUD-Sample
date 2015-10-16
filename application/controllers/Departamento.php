<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departamento extends CI_Controller {

    public function __construct()
    {
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

		$this->load->view('departamento/listar', $dados);
	}

	public function inserir()
	{
		$dados = array(
			'titulo' => 'CodeIgniter - CRUD',
			'subTitulo' => 'Inserir Departamento',
			);

		$this->load->view('departamento/inserir', $dados);
	}

	public function inserirNovoDepartamento()
	{
		$dados = array(
				'nome' => $this->input->post('departamento')
			);

		$this->departamento_model->set_departamento($dados);

		$dados = array(
			'titulo' => 'CodeIgniter - CRUD',
			'subTitulo' => 'Listar Departamentos',
			'departamentos' => $this->departamento_model->get_departamentos_all()->result()
			);

		$this->load->view('departamento/listar', $dados);
	}
}